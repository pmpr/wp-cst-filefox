/*! For license information please see download.h6HDZsAa7.js.LICENSE.txt */
!function(){const e=PRHelper.getType(),t=PRHelper.getHTML(),o=PRHelper.getSetting(),l=PRHelper.getRequest(),a=PRFrontendHelper.getHTML();let r=t.getElement("#progress_bar"),n=t.getElement("#message_wrapper");const s=e=>{t.isElement(r)&&PRHelper.getHTML().addAttribute(r,{"aria-valuenow":e,style:{width:`${e}%`}})},d=()=>{s(95),l.ajax(o.getOption("ajax.get_download_links")).onSuccess((e=>{s(100),t.append(e,".downloads"),t.addClass(".downloads","show")})).onError((e=>{a.alert(n,e.message??e)})).onFinally((()=>{t.removeClass(".progress-bar","show")})).addNonce().send({file:PRHelper.getServer().getParam("file")})};let i=o.getOption("wait",0),g=PRHelper.getServer().getParam("file");if(PRHelper.getHook().on("click",(function(e){t.addClass(t.getTarget(e,".download-link"),"disabled")}),".download-link"),i>0)if(e.isEmpty(g))a.alert(n,o.getOption("message.file_not_found"));else{const e=(e,t=1)=>Math.floor(Math.random()*(e-t)+t),o=t=>{let o,l,a={},r=Math.floor(100/t),n=r,s=1,d=i;l=e(i/(t-1)),a[0]=l;for(let g=0;g<t-2;g++)d-=l,s=n,n+=r,o=e(n,s),l=e(i/(t-1)),a[o]=l;return a[100]=d-l,a};PRHelper.getHook().on("click",(function(e){let l,a=0,r=o(Math.min(8,i));t.addClass(".start-download","pr-invisible"),t.addClass(".progress-bar","show");for(let e in r)l=r[e],setTimeout((()=>{100==e?d():e<95&&s(e)}),1e3*(l+a)),a+=l}),".start-download")}else d()}();