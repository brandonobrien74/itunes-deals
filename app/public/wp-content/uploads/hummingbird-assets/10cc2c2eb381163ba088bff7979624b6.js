/**handles:comment-reply**/
window.addComment=function(a){function b(a){if(s&&(l=i(q.cancelReplyId),m=i(q.commentFormId),l)){l.addEventListener("touchstart",d),l.addEventListener("click",d);for(var b,f=c(a),g=0,h=f.length;g<h;g++)b=f[g],b.addEventListener("touchstart",e),b.addEventListener("click",e)}}function c(a){var b,c=q.commentReplyClass;return a&&a.childNodes||(a=p),b=p.getElementsByClassName?a.getElementsByClassName(c):a.querySelectorAll("."+c)}function d(a){var b=this,c=q.temporaryFormId,d=i(c);d&&n&&(i(q.parentIdFieldId).value="0",d.parentNode.replaceChild(n,d),b.style.display="none",a.preventDefault())}function e(b){var c,d=this,e=h(d,"belowelement"),f=h(d,"commentid"),g=h(d,"respondelement"),i=h(d,"postid");c=a.addComment.moveForm(e,f,g,i),!1===c&&b.preventDefault()}function f(){if(r){var a={childList:!0,subTree:!0};o=new r(g),o.observe(p.body,a)}}function g(a){for(var c=a.length;c--;)if(a[c].addedNodes.length)return void b()}function h(a,b){return t?a.dataset[b]:a.getAttribute("data-"+b)}function i(a){return p.getElementById(a)}function j(b,c,d,e){var f=i(b);n=i(d);var g,h,j,o=i(q.parentIdFieldId),r=i(q.postIdFieldId);if(f&&n&&o){k(n),e&&r&&(r.value=e),o.value=c,l.style.display="",f.parentNode.insertBefore(n,f.nextSibling),l.onclick=function(){return!1};try{for(var s=0;s<m.elements.length;s++)if(g=m.elements[s],h=!1,"getComputedStyle"in a?j=a.getComputedStyle(g):p.documentElement.currentStyle&&(j=g.currentStyle),(g.offsetWidth<=0&&g.offsetHeight<=0||"hidden"===j.visibility)&&(h=!0),"hidden"!==g.type&&!g.disabled&&!h){g.focus();break}}catch(t){}return!1}}function k(a){var b=q.temporaryFormId,c=i(b);c||(c=p.createElement("div"),c.id=b,c.style.display="none",a.parentNode.insertBefore(c,a))}var l,m,n,o,p=a.document,q={commentReplyClass:"comment-reply-link",cancelReplyId:"cancel-comment-reply-link",commentFormId:"commentform",temporaryFormId:"wp-temp-form-div",parentIdFieldId:"comment_parent",postIdFieldId:"comment_post_ID"},r=a.MutationObserver||a.WebKitMutationObserver||a.MozMutationObserver,s="querySelector"in p&&"addEventListener"in a,t=!!p.body.dataset;return b(),f(),{init:b,moveForm:j}}(window);