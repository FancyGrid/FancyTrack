# FancyTrack

Build v1.0.1

FancyTrack - JavaScript error tracking library from FancyGrid team.  
FancyTrack is light alternative to [TrackJS](https://trackjs.com/) service.  

##Pros and Cons
It is free and light.  
But at the moment it overrides window.onerror handler.  
window.onerror is not supported by IE Edge

## Quick Start
Include a reference to the FancyTrack library

```html
<script src="/fancytrack/fancytrack.min.js"></script>
```
The `FancyTrack` object is now accessible. Happy error tracking!

### Sample: Base Init
```html
<script>
FancyTrack.init({
  url: '/trackerror/'
});
</script>
```

### Sample: Set method of request
```html
<script>
FancyTrack.init({
  url: '/trackerror/',
  method: 'POST'
});
</script>
```

### Sample: Track/Send custom error
```html
<script>
FancyTrack.init({
  url: '/trackerror/'
});

FancyTrack.track("My Error");
</script>
```

## Parametres that FancyTrack sends

* browser
* columnNumber
* errorText
* errorName
* errorStack
* lineNumber
* mobile
* os
* url
* userAgent

## Package Directory
The package includes the following:
```
|   README.md
├── client
│   ├── fancytrack.min.js
│   ├── fancytrack.js
|   ...
```

## Resources
[Capture and report JavaScript errors with window.onerror](https://blog.sentry.io/2016/01/04/client-javascript-reporting-window-onerror.html)  
[Test case of error reporting on php](https://github.com/FancyGrid/FancyTrack/blob/master/client/error.php)

## Install

#### *npm*
```
npm install fancytrack
```

## Support
If you need any assistance or would like to report any bugs found in FancyTrack, please contact us at support@fancygrid.com
