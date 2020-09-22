<?php

error_reporting(-1);

require_once __DIR__ . "/BlogPostHeader.php";
require_once __DIR__ . "/Parsedown.php";
require_once __DIR__ . "/misc.php";

class BlogPost
{
    public string $markdown_file_path;
    public string $url_folder;
    public string $url_markdown;
    public string $markdown;

    public string $title;
    public array $tags;
    public int $epochTime;
    private int $headerLength;

    public string $html;

    public string $neighborFolderNewer;
    public string $neighborFolderOlder;
    public bool $showMeta;

    function __construct(string $markdown_file_path, bool $headerOnly = false, bool $findNeighbors = true, bool $showMeta = false)
    {
        $this->markdown_file_path = $markdown_file_path;
        $this->markdown = file_get_contents($markdown_file_path);
        $this->markdown = str_replace("\r", "", $this->markdown);
        $this->url_folder = str_replace($_SERVER['DOCUMENT_ROOT'], "", realpath(dirname($this->markdown_file_path)));
        $this->url_markdown = $this->url_folder . DIRECTORY_SEPARATOR . basename($markdown_file_path);
        $this->showMeta = $showMeta;
        $header = new BlogPostHeader($this->markdown);

        $this->title = $header->title;
        $this->tags = $header->tags;
        $this->headerLength = $header->headerLength;
        $this->epochTime = isset($header->epochTime) ? $header->epochTime : filectime($markdown_file_path);

        if ($headerOnly == false) {
            $this->parseMarkdown();

            if ($findNeighbors)
                $this->findNeighborPosts();
        }
    }

    public function __toString()
    {
        return $this->html;
    }

    public function findNeighborPosts()
    {
        $rootBlogFolder = dirname(dirname($this->markdown_file_path));
        $folderNames = scandir($rootBlogFolder);
        $neighborNames = [];
        foreach ($folderNames as $folderName) {
            if (startsWith($folderName, "20"))
                $neighborNames[] = $folderName;
        }
        rsort($neighborNames);
        $thisFolderName = basename(dirname($this->markdown_file_path));
        $thisIndex = array_search($thisFolderName, $neighborNames);

        if ($thisIndex > 0) {
            $this->neighborFolderNewer = $rootBlogFolder . DIRECTORY_SEPARATOR . $neighborNames[$thisIndex - 1];
        }
        if ($thisIndex < count($neighborNames) - 1) {
            $this->neighborFolderOlder = $rootBlogFolder . DIRECTORY_SEPARATOR . $neighborNames[$thisIndex + 1];
        }
    }

    public function parseMarkdown()
    {
        // line by line tweak of the markdown
        $md_without_header = substr($this->markdown, $this->headerLength);
        $markdown_lines = explode("\n", $md_without_header);
        for ($i = 0; $i < count($markdown_lines); $i++) {
            $line = $markdown_lines[$i];
            $trimmedLine = trim($line);
            if (startsWith($trimmedLine, "![](") && endsWith($trimmedLine, ")")) {
                $markdown_lines[$i] = $this->specialLink($trimmedLine);
            }
        }
        $modified_markdown = implode("\n", $markdown_lines);

        // convert Markdown to HTML
        $Parsedown = new Parsedown();
        $html = $Parsedown->text($modified_markdown);

        // line by line tweak of the HTML
        $html = $this->addAnchorsToHeadings($html);

        // HTML-wide search/replace
        $html = str_replace("<pre><code class", "<pre class='prettyprint'><code class", $html);
        $html = str_replace("<pre><code>", "<pre class='prettyprint'><code class='nocode'>", $html);

        // add metadata
        if ($this->showMeta) {

            $time = date("g:i A", $this->epochTime);
            $day = date("F jS, Y", $this->epochTime);

            $tags = [];
            foreach ($this->tags as $tag)
                $tags[] = "<a href='/blog/category/" . str_replace(" ", "-", $tag) . "'>$tag</a>";
            $tags = join(", ", $tags);
            //if (strlen($tags) > 0)
                //$tags = "Categories " . $tags;

            $meta = "<div class='postMeta'>";
            $meta .= "<div><a href='$this->url_folder'>$this->title</a></div>";
            $meta .= "<div>Posted on $day</div>";
            $meta .= "<div>$tags</div>";
            $meta .= "</div>";
            $html = $meta . $html;
        }

        // add warning
        if (in_array("old", $this->tags)) {
            $warn =
                "<div style='padding: .5em; margin-bottom: 1em; background-color: #ff000014; border: 1px solid #ff000024;'>" .
                "<div><strong>&#9888;&#65039; Warning: This article is obsolete.</strong></div>" .
                "<div style=''>Articles typically receive this designation when the technology they describe " .
                "is no longer relevant, code provided is later deemed to be of poor quality, or the topics discussed are " .
                "better presented in future articles. Articles like this are retained for the sake of preservation, but their  " .
                "content should be critically assessed.</div>" .
                "</div>";
            $html = $warn . $html;
        }

        // wrap in an article
        $html = "<article><div id='md2html'>$html</div></article>";

        $this->html = $html;
    }

    public static function compareDate(BlogPost $a, BlogPost $b)
    {
        if ($a->epochTime < $b->epochTime) return -1;
        else if ($a->epochTime == $b->epochTime) return 0;
        else return 1;
    }

    /* turn dirty text into a clean anchor url */
    private function sanitizeLinkUrl($url)
    {
        $valid = "";
        foreach (str_split(strtolower(trim($url))) as $char)
            $valid .= (ctype_alnum($char)) ? $char : "-";
        while (strpos($valid, "--"))
            $valid = str_replace("--", "-", $valid);
        return trim($valid, '-');
    }

    /* give headings anchor links with a little chain graphic */
    private function addAnchorsToHeadings($html)
    {
        $lines = explode("\n", $html);
        for ($i = 0; $i < count($lines); $i++) {
            $line = $lines[$i];

            $isHeaderLine = (substr($line, 0, 2) == "<h" && substr($line, 3, 1) == ">");
            if ($isHeaderLine == false)
                continue;

            $headerLevel = substr($line, 2, 1);
            $headerLabel = substr($line, 4, strlen($line) - 9);
            $url = $this->sanitizeLinkUrl($headerLabel);

            $anchor = "<a class='anchorLink' href='#$url'><svg mr='2' height='16' viewBox='0 0 16 16' version='1.1' width='16' " .
                "aria-hidden='true'><path fill-rule='evenodd' d='M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 " .
                "2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 " .
                "2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 " .
                "4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z'></path></svg></a>";
            $text = "<span class='anchorText'>$headerLabel</span>";
            $lines[$i] = "<h$headerLevel id='$url'>$anchor$text</h$headerLevel>";
        }
        return join("\n", $lines);
    }

    /* tweak special ![](linksLikeThis) */
    private function specialLink(string $line)
    {
        $url = substr($line, 4, strlen($line) - 5);

        // TODO: table of contents

        // TODO: dynamic inclusion?

        // make YouTube links embedded videos
        $isYouTube = startsWith($url, "https://www.youtube.com/embed/");
        if ($isYouTube) {
            return "<iframe src='$url' frameborder='0' " .
                'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ' .
                'allowfullscreen></iframe>';
        }

        // make images link to themselves
        $isImage = endsWith($url, ".png") || endsWith($url, ".jpg") || endsWith($url, ".jpeg") || endsWith($url, ".bmp") || endsWith($url, ".gif");
        if ($isImage) {

            $originalFileName = basename($url);
            $originalFilePath = dirname($this->markdown_file_path) . DIRECTORY_SEPARATOR . $originalFileName;

            $thumbFileName = pathinfo($url)['filename'] . "_thumb.jpg";
            $thumbFilePath = dirname($url) . DIRECTORY_SEPARATOR . $thumbFileName;
            $thumbFilePath = dirname($this->markdown_file_path) . DIRECTORY_SEPARATOR . $thumbFilePath;

            if (file_exists($thumbFilePath)) {
                $url = basename($url);
                return "[![]($this->url_folder/$thumbFileName)]($this->url_folder/$url)";
            } else {
                if (file_exists($originalFilePath)) {
                    return "[![]($this->url_folder/$originalFileName)]($this->url_folder/$originalFileName)";
                } else {
                    return "[![]($url)]($url)";
                }
            }
        }

        return $line;
    }
}
