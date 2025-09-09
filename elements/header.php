<!DOCTYPE html>
<html class="writer-html5 @{ theme | replace('/[^a-z]/', ' ') }<@ if not @{ ?list } @> @{ :template | def(@{ template }) }<@ end @>" lang="en">
<head>
	<?php if (substr(AM_VERSION, 0, 1) == '1') { ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<@ set { 
			:description: @{ +main | findFirstParagraph },
			:metaTitle: @{ metaTitle | def('@{ sitename } / @{ title | def ("404") }') }
		} ~@>
		<title>@{ :metaTitle }</title>
		<@ Automad/MetaTags { 
			description: @{ :description },
			ogTitle: @{ :metaTitle },
			ogDescription: @{ :description },
			ogType: 'website',
			ogImage: @{ ogImage | def('*.jpg, *.png, *.gif, /shared/*.jpg, /shared/*.png, /shared/*.gif') },
			twitterCard: 'summary_large_image'
		} ~@>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/styles/@{ syntaxTheme | def('ascetic') }.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/highlight.min.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
	<?php } ?>
	<link rel="stylesheet" href="/packages/revitron/automad-revitron/dist/revitron.min.css" type="text/css" />
	@{ customProperties | replace ('/^(.+)$/', '<style>:root{$1}</style>') }
	@{ itemsHeader }
</head>

<body class="wy-body-for-nav">
