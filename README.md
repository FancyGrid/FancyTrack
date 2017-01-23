# FancyTrack

Build v1.0.0

Free Tiny FancyTrack JavaScript error tracking library from FancyGrid team.  
FancyTrack is light alternative to [TrackJS](https://trackjs.com/) service.  

##Pros and Cons
It is free and light.  
But at the moment it overrides window.onerror handler.  
window.onerror is not supported by IE Edge

## Install

#### *bower*
```
bower install fancytrack
```

## Quick Start
Include a reference to the FancyTrack library

```html
<script src="/fancytrack/fancytrack.min.js"></script>
```
The `FancyTrack` object is now accessible. Happy error tracking!
```html
<script>
FancyTrack.init({
  url: '/trackerror/'
});
</script>
```

## Method
```html
<script>
FancyTrack.init({
  url: '/trackerror/',
  method: 'POST'
});
</script>
```

## Parametres that FancyTrack sends

* url
* errorText
* errorName
* errorStack
* lineNumber
* columnNumber

## Package Directory
The package includes the following:
```
|   README.md
├── client
│   ├── fancytrack.min.js
|   ...
```

## Resources
[Capture and report JavaScript errors with window.onerror](https://blog.sentry.io/2016/01/04/client-javascript-reporting-window-onerror.html)

## Support
If you need any assistance or would like to report any bugs found in FancyTrack, please contact us at support@fancygrid.com
