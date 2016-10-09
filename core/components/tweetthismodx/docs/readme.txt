
##For Content & Social Marketers!

<span class="tweetthis">A great way for content and social media marketers to get their work shared is to use a technique known as TweetThis</span>. A Tweet link around a compelling, noteworthy or shareworthy block of copy text, that makes it easy for the user to Tweet it, sharing your fantastic content.

What's great is that the functionality sits within your copy text layout, so it can be used frequently on a page without disrupting the layout. An example use might be on a title or quote.


##Demo

[TweetThisMODX Project Home](https://stuntrocket.github.io/TweetThisModx/)

## Install via Package Manager

Search Package Manager for "TweetThisModx" and then download and install.

## Usage

In the Chunk or Template where you want to show a "TweetThis" button next to a block of text:

```
[[TweetThis? &text=`Your Tweetable Text Here`]]
```

This will display your text with a small button next to it. When clicked the button will open a Tweet dialogue in the user's browser with the text and URL inserted ready for them to Tweet.

## Dependencies

TweetThisMODX depends on MODX. JQuery is not needed because it uses native Javascript.

## Enable & Disable

If you want to globally disable TweetThisModx, head into your MODX System Settings and within the TweetThisModx Namespace look for **tweetthismodx.enabled**. Set this to **No** to disable the plugin for the entire site.

Disabling the plugin this way does not disrupt your text, it just removes the button.

## CSS Styling

The idea with "Tweet This" functionality is that it sits within your regular copy text. For this reason the styling is minimal - so it fits in.

If you do want to style the text or button element they have each have a CSS class that you can target in your stylesheets.

If you would like to use you own class names, head into your MODX System Settings and look for the following two Settings in the TweetThisModx Namespace:

**tweetthismodx.highlight_class** (Default: ttm_highlight)
**tweetthismodx.link_class** (Default: ttm_link)

Respectively these affect the text and the button.

Advanced usage with custom CSS classes defined on page/template/chunk.

```
[[TweetThis?
  &text=`Tweetable Text`
  &highlight_class=`my_highlight_class`
  &link_class=`my_link_class`
]]
```

If you don't know what CSS styling is or how to edit CSS files, you'll probably want to leave this alone or ask a developer to help you.


##Problems

If there are any problems, please create an issue on the [GitHub Repository](https://github.com/stuntrocket/TweetThisModx)

###Project & Author:

[TweetThisMODX Project Home](https://stuntrocket.github.io/TweetThisModx/)

[Author Home - StuntRocket](https://stuntrocket.co)

[StuntRocket on GitHub](https://stuntrocket.github.io)


###MODX

MODX CMS can be downloaded here:

[MODX CMS Home](http://modx.com)
