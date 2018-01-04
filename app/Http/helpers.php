<?php
    function formatPostContent($content) {
        $content = str_replace(array("\n","\r"), ' ', $content); //Remove new lines
        $content = preg_replace('/\s+/', ' ', $content); //Remove duplicate spaces
        $content = trim($content); //Trim
        $content = strip_tags($content); //Remove tags

        if (strlen($content) >= 93) //Set maximum length
            $content = substr($content, 0, 91) . '...'; // Add ellipsis to end of string to
                                                                     // suggest there is more to the post

        return $content;
    }
