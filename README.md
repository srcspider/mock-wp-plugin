pixcore status: [![Build Status](http://jenkins.pixelgrade.com:8080/buildStatus/icon?job=pixcore)](http://jenkins.pixelgrade.com:8080/job/pixcore/)

Sample plugin template. Designed to demo pixcore functionality.

	gem install pxg
	cd path/to/plugin
	pxg compile .

See `pxg.json` for configuration.

Note: if you set your namespace to myns then you need to calls
`myns::something()` instead of what would normally be `pixcore::something()`
