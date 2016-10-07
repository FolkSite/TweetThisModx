#TweetThisModx Extra
=====================

**Author:** Daniel Harding hello@stuntrocket.co [StuntRocket](https://stuntrocket.co)

Documentation is available at: [TweetThisMODX Documentation](http://stuntrocket.app/code/modx/tweetthismodx.html)

[GitHub Repository](https://github.com/stuntrocket/TweetThisModx)


##For Content & Social Marketers

A good way for content and social media marketers to get their work shared is to use a technique known as "Tweet This" - A Tweet link around a block of copy text that makes it easy for the user to Tweet it, sharing your content for you.

Typically this is used on titles, quotes or other noteworthy, but importantly short pieces of text because of the Twitter character limit.

What's great is that the functionality sits within your copy text layout, so it can be used frequently on a page without disrupting the layout.

##Demo

https://stuntrocket.co/code/modx/tweetthismodx.html


## Install via Package Manager

Search Package Manager for "TweetThisModx" and then download and install.

## Usage

In the Chunk or Template where you want to show a "TweetThis" button and associated block of text use:

```
[[TweetThis? &text=`Put Your Text In Here...`]]
```

This will display your text with a small button next to it. When clicked the button will open a Tweet dialogue in the user's browser with the text and URL inserted ready for them to click "Tweet".

## Dependencies

TweetThis does not have any dependencies (e.g JQuery not needed) because it uses native Javascript to keep things as light as possible.

## Enable & Disable

If you want to globally disable TweetThisModx, head into your MODX System Settings and within the TweetThisModx Namespace look for **"tweetthismodx.enabled"**. Set this to **"No"** to disable the plugin for the entire sight.

Disabling the plugin this way does not disrupt your text, it just removes the button.

## CSS Styling

The idea with "Tweet This" functionality is that it sits within your regular copy text, perhaps on a share-worthy title or quote. For this reason the styling is minimal - so it fits in.

If you do want to style the text or button element they have each have a CSS class that you can target in your stylesheets.

If you would like to use you own class names, head into your MODX System Settings and look for the following two Settings in the TweetThisModx Namespace:

**tweetthismodx.highlight_class** (Default: ttm_highlight)

**tweetthismodx.link_class** (Default: ttm_link)

Respectively these affect the text itself (eg you could add a Twitter blue background colour), and the button (you might want the text larger or smaller).

If you don't know what CSS styling is or how to edit CSS files, you'll probably want to leave this alone or ask a developer to help you.


##Problems##

Any problems please create an issue on GitHub.

https://github.com/stuntrocket/TweetThisModx
