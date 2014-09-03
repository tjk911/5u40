Prep Football '14
==============

The Times' annual prep football tab, in digital form. 

Live version viewable here: http://www.sctimes.com/prepfootball

First digital, responsive, football tab was launched in 2013 and viewable here: http://archive.sctimes.com/projects/prepfootball/

Project code
==============

Project is primarily running on Foundation. Parallax was done with Skrollr.js, dynamic loading was achieved with a slightly tweaked dynamicpage.js.

Responsive tables code from Zurb with tweaks for different breakpoints.

To-do
==============

* Cleanup and optimize code - heavy load on the page, CSS could do with additional cleaning
* Templating pages more
* Tweaking styling - a great deal of Foundation's basic stylings still remain
* Adapting project over to rdpapp
* Work on the ad code a little more - somewhat haphazard implementation right now

Contributors
==============

* Reporting - Times sports staff
* Online elements - Andrew Fraser (@andrewfraser)
* Online elements - Jun-Kai Teoh (@jkteoh)
* Photography - Times photo staff
* Digital lead - Mike Knaak (@mknaak)

DynamicPage.js changes
==============

Added custom class "external" to make links load externally, as we had problems loading our "SCTimes Scores" app that was on the same domain. External domain links worked fine, so we could have used an alias/redirect, but we decided an extra few lines of code to future-proof it. 

```
	//if external don't load dynamically
 	$('div').delegate('a:not(.external)', 'click', function() {
        _link = $(this).attr('href');
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

```

We also added a scroll to top feature, as most of the stories are fairly lengthy. 

```
	$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
```

Because of how our project was structured, the "back" button wasn't working properly either. We made this change:

```
       //_link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
	   _link = window.location.href.replace(/^.*[\\\/]/, '');
```

Also, we made some tweaks to capture link clicks beyond "nav" as well. You'll see that at the top of dynamicpage.js, nothing fancy there.