/**handles:skip-links**/
function ga_skiplinks(){"use strict";var element=document.getElementById(location.hash.substring(1));element&&(!1===/^(?:a|select|input|button|textarea)$/i.test(element.tagName)&&(element.tabIndex=-1),element.focus())}window.addEventListener?window.addEventListener("hashchange",ga_skiplinks,!1):window.attachEvent("onhashchange",ga_skiplinks);