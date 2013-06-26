<?php

/*
Copyright (c) 2013 Bryce Campbell

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. */

// the FeedFooter class puts a message at the footer of entries in ATOM feed
class FeedFooter extends Plugin
{	
	public function filter_post_content_atom($content)
	{
		$content = $content . $this->message();
		return $content;
	}
	
	public function message()
	{
		$mess = '<div class="feedmess">';
		$mess .= '<p>This article was originally published on <span style="font-weight:bold">'. Site::get_url('habari') . '</span></p>';
		$mess .= '<p>If you are reading this on a blog other than <a href="' . Site::get_url('habari') . '" style="font-weight:bold">' . Utils::htmlspecialchars(Options::get('title')) . '</a>, it has most likely been scraped. You are encouraged to support the original author by commenting on the original or sharing the original link, and not this poser.</p>';
		$mess .= '</div>';
		return $mess;
	}
} // end class
?>