<!DOCTYPE html>
<html class="writer-html5 <@ if not @{ ?list } @>@{ :template }<@ end @>" lang="en">
<head>
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
	<link rel="stylesheet" href="/packages/@{ theme }/dist/revitron.min.css" type="text/css" />
	@{ itemsHeader }
</head>

<body class="wy-body-for-nav">

		