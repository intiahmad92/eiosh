(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[7966],{54641:function(e,n,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/account",function(){return t(32343)}])},2308:function(e,n,t){"use strict";var s=t(85893),r=t(48155),c=t(28368),o=t(56205),a=t.n(o);let i=e=>{let{title:n,description:t,url:o,children:i}=e;return(0,s.jsxs)(c.Z,{children:[(0,s.jsx)(r.Z,{title:n,description:t,url:o}),(0,s.jsx)("div",{className:a().page,children:i})]})};i.defaultProps={description:"The Public 3D Asset Library"},n.Z=i},7522:function(e,n,t){"use strict";var s=t(85893),r=t(41664),c=t.n(r);n.Z=e=>(0,s.jsx)(c(),{...e,href:e.href||"",children:e.children})},40133:function(e,n,t){"use strict";var s=t(85893),r=t(84436),c=t(80180),o=t.n(c);let a=e=>{let{disabled:n,tooltip:t,tooltipSide:c,style:a,children:i}=e;return n?(0,s.jsxs)("div",{className:o().disabled,"data-tip":t,style:a,children:[(0,s.jsx)("div",{className:o().contents,children:i}),(0,s.jsx)(r.Z,{place:c})]}):i};a.defaultProps={disabled:!0,style:{},tooltip:null,tooltipSide:null},n.Z=a},92067:function(e,n,t){"use strict";var s=t(85893);let r=e=>{let{color:n}=e;return(0,s.jsxs)("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 180 180",children:[(0,s.jsx)("path",{fill:n||"#f96753",d:"M108.8135992 26.06720125c-26.468266 0-48.00213212 21.53066613-48.00213212 47.99733213 0 26.38653268 21.53386613 47.85426547 48.00213213 47.85426547 26.38639937 0 47.8530655-21.4677328 47.8530655-47.85426547 0-26.466666-21.46666613-47.99733213-47.85306547-47.99733213"}),(0,s.jsx)("path",{fill:n||"#052a49",d:"M23.333335 153.93333178V26.0666679h23.46666576v127.8666639z"})]})};r.defaultProps={color:null},n.Z=r},28826:function(e,n,t){"use strict";var s=t(85893),r=t(66906),c=t.n(r);n.Z=()=>(0,s.jsx)("div",{className:c().wrapper,children:(0,s.jsx)("div",{className:c().loader})})},41644:function(e,n,t){"use strict";var s=t(85893),r=t(5434),c=t(47307),o=t.n(c);let a=e=>{let{on:n,onClick:t,labelOn:r,labelOff:c}=e;return(0,s.jsxs)("div",{onClick:t,className:o().wrapper,children:[(0,s.jsx)("div",{className:"".concat(o().toggle," ").concat(n?o().on:"")}),(0,s.jsx)("div",{className:"".concat(o().label," ").concat(n?"":o().sel),children:c}),(0,s.jsx)("div",{className:"".concat(o().label," ").concat(n?o().sel:""),children:r})]})};a.defaultProps={labelOn:(0,s.jsx)(r.HhX,{}),labelOff:(0,s.jsx)(r.FU5,{})},n.Z=a},84436:function(e,n,t){"use strict";var s=t(85893),r=t(24762),c=t(92360),o=t.n(c);let a=e=>{let{id:n,place:t}=e;return(0,s.jsx)(r.Z,{id:n,place:t,delayShow:250,multiline:!0,border:!0,borderColor:"rgba(190, 111, 255, 0.5)",backgroundColor:"rgb(60, 60, 60)",className:o().tooltip})};a.defaultProps={id:null,place:null},n.Z=a},32343:function(e,n,t){"use strict";t.r(n),t.d(n,{__N_SSG:function(){return G},default:function(){return T}});var s=t(85893),r=t(11163),c=t(67294),o=t(73606),a=t(28276),i=t(19522),l=t(31137),d=t(28826),u=t(2308),h=t(5434),p=t(40133),x=t(41644),m=t(56147),j=t.n(m),_=e=>{let{uuid:n,patron:t}=e,[r,o]=(0,c.useState)({}),[l,d]=(0,c.useState)(!1),[u,m]=(0,c.useState)(!1),[_,f]=(0,c.useState)(""),{t:w}=(0,a.$G)(["common","account"]);return(0,c.useEffect)(()=>{d("yes"===localStorage.getItem("hideAds")),m(t.anon||!1),f((t.display_name||t.name).trim()),o({name:(t.display_name||t.name).trim()})},[]),(0,s.jsxs)("div",{children:[(0,s.jsx)("h1",{children:w("account:rewards.no-ads.title")}),(0,s.jsx)("p",{children:w("account:rewards.no-ads.p1")}),(0,s.jsxs)("div",{style:{display:"flex",alignItems:"center",gap:"0.5em"},children:[(0,s.jsx)(x.Z,{on:l,onClick:()=>{localStorage.setItem("hideAds",l?"no":"yes"),d(!l)},labelOff:(0,s.jsx)(h.t2l,{}),labelOn:(0,s.jsx)(h.wqE,{})}),(0,s.jsxs)("p",{children:[w("account:rewards.no-ads.p2")," ",(0,s.jsx)("strong",{children:w(l?"common:hidden":"common:visible")}),"."]})]}),(0,s.jsx)("h1",{children:w("account:rewards.credit.title")}),(0,s.jsxs)("div",{style:{display:"flex",alignItems:"center",gap:"0.5em"},children:[(0,s.jsxs)("p",{children:[w("account:rewards.credit.p1")," "]}),(0,s.jsx)(x.Z,{on:u,onClick:()=>{(0,i.JS)(n,{anon:!u}).then(e=>{e.error&&console.error(e)}),m(!u)},labelOff:(0,s.jsx)(h.t2l,{}),labelOn:(0,s.jsx)(h.wqE,{})}),(0,s.jsxs)("p",{children:[(0,s.jsx)("strong",{children:u?w("common:hidden").toLowerCase():w("common:visible").toLowerCase()}),(0,s.jsx)(a.cC,{i18nKey:"account:rewards.credit.p2",t:w,values:{hidden:""}})]})]}),(0,s.jsx)("p",{children:w("account:rewards.credit.p3")}),!u&&!t.rewards.includes("Sponsor")&&(0,s.jsxs)("div",{className:j().row,children:[(0,s.jsxs)("p",{children:[w("common:display-name"),":"]}),(0,s.jsx)("form",{onSubmit:e=>{e.preventDefault()},children:(0,s.jsx)("input",{type:"text",value:_,onChange:e=>{f(e.target.value)}})}),(0,s.jsx)(p.Z,{disabled:!_.length,tooltip:w("account:rewards.credit.invalid"),children:(0,s.jsx)("div",{className:"".concat(j().iconBtn," ").concat(_!==r.name&&j().highlight),onClick:e=>{(0,i.JS)(n,{display_name:_.trim()||null}).then(e=>{e.error?console.error(e):o({...r,name:_.trim()||""})})},children:(0,s.jsx)(h.HhX,{})})})]})]})},f=t(92067),w=t(7522),g=t(3797),y=t.n(g),v=()=>{let{t:e}=(0,a.$G)(["common","account"]);return(0,s.jsxs)("div",{children:[(0,s.jsx)("h1",{children:e("account:rewards.early-access.title")}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.early-access.p1",t:e,components:{lnk:(0,s.jsx)(w.Z,{href:"/all"})}})}),(0,s.jsxs)("p",{children:[e("account:rewards.early-access.p2")," ",(0,s.jsx)("span",{style:{display:"inline-block"},children:(0,s.jsx)("span",{className:"".concat(y().badgeSample," ").concat(y().soon),children:(0,s.jsx)(f.Z,{})})})]}),(0,s.jsx)("p",{children:e("account:rewards.early-access.p3")})]})},S=t(48966),b=t(84436),C=e=>{let{uuid:n,patron:t}=e,[r,o]=(0,c.useState)(""),[l,u]=(0,c.useState)(!1),[x,m]=(0,c.useState)(!1),[_,f]=(0,c.useState)(""),{t:g}=(0,a.$G)(["common","account"]);return(0,s.jsxs)("div",{children:[(0,s.jsx)("h1",{children:g("account:rewards.offline-access.title")}),t.invite_sent?(0,s.jsx)("p",{children:(0,s.jsx)("em",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.offline-access.p3",t:g,components:{lnk:(0,s.jsx)(w.Z,{href:"/about-contact"})}})})}):(0,s.jsxs)("div",{className:j().row,children:[(0,s.jsx)("p",{children:g("account:rewards.offline-access.p1")}),(0,s.jsx)("form",{onSubmit:e=>{e.preventDefault()},children:(0,s.jsx)("input",{type:"text",value:r,onChange:e=>{o(e.target.value)}})}),!x&&(0,s.jsx)(p.Z,{disabled:l,tooltip:g("common:please-wait"),children:(0,s.jsx)(p.Z,{disabled:!(0,S.isEmail)(r),tooltip:g("common:invalid-email"),children:(0,s.jsx)("div",{className:"".concat(j().iconBtn," ").concat(!x&&j().highlight),onClick:e=>{u(!0),(0,i.Cz)(n,r).then(e=>{u(!1),e.error?(f(e.message),console.error(e)):"ok"!==e.ocs.meta.status?(f(e.ocs.meta.message),console.error(e)):m(!0)})},children:l?(0,s.jsx)(d.Z,{}):x?(0,s.jsx)(h.HhX,{}):(0,s.jsx)(h.D6S,{})})})}),_&&(0,s.jsx)("p",{children:_}),x&&(0,s.jsx)("p",{children:g("account:rewards.offline-access.p2")})]}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.offline-access.p4",t:g,components:{lnk:(0,s.jsx)("a",{href:"https://www.patreon.com/posts/accessing-14640286"})}})}),(0,s.jsx)(b.Z,{})]})},Z=t(60155),k=e=>{let{uuid:n,patron:t}=e,[r,o]=(0,c.useState)({}),[l,u]=(0,c.useState)(!1),[m,_]=(0,c.useState)(!1),[f,w]=(0,c.useState)(""),[g,y]=(0,c.useState)(!1),[v,C]=(0,c.useState)(""),[k,I]=(0,c.useState)(""),[N,G]=(0,c.useState)(!1),{t:T}=(0,a.$G)(["common","account"]);(0,c.useEffect)(()=>{u(t.auto_sponsor||!1),w(t.notify_email||""),C((t.display_name||t.name).trim()),I(t.url||""),o({auto_sponsor:t.auto_sponsor||!1,notify_email:t.notify_email||"",display_name:(t.display_name||t.name).trim(),url:t.url||""})},[]);let O=e=>{e.preventDefault()};return(0,s.jsxs)("div",{children:[(0,s.jsx)("h1",{children:T("account:rewards.sponsor.title")}),(0,s.jsxs)("div",{className:j().row,children:[(0,s.jsxs)("p",{children:[T("common:display-name"),":"]}),(0,s.jsx)("form",{onSubmit:O,children:(0,s.jsx)("input",{type:"text",value:v,"data-tip":T("common:required"),onChange:e=>{C(e.target.value)}})}),(0,s.jsx)("p",{children:"Link:"}),(0,s.jsx)("form",{onSubmit:O,children:(0,s.jsx)("input",{type:"text",value:k,"data-tip":T("common:optional"),onChange:e=>{I(e.target.value)}})}),(0,s.jsx)(p.Z,{disabled:!(0,S.isURL)(k,{require_protocol:!0})&&k.length||!v.length,tooltip:T("common:invalid-name-url"),children:(0,s.jsx)("div",{className:"".concat(j().iconBtn," ").concat((v!==r.display_name||k!==r.url)&&j().highlight),onClick:e=>{G(!0),(0,i.JS)(n,{display_name:v.trim()||null,url:k.trim()||null}).then(e=>{G(!1),o({...r,display_name:v.trim()||"",url:k.trim()||""}),e.error&&console.error(e)})},children:N?(0,s.jsx)(d.Z,{}):v!==r.display_name||k!==r.url?(0,s.jsx)(h.tfk,{}):(0,s.jsx)(h.HhX,{})})})]}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p1")}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.sponsor.p2",t:T,components:{ticket:(0,s.jsx)(Z.Tx$,{}),b:(0,s.jsx)("strong",{})}})}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p3")}),(0,s.jsxs)("ol",{children:[(0,s.jsx)("li",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.sponsor.p3li1",t:T,components:{ticket:(0,s.jsx)(Z.Tx$,{})}})}),(0,s.jsx)("li",{children:T("account:rewards.sponsor.p3li2")})]}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p4")}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p5")}),(0,s.jsxs)("div",{style:{display:"flex",alignItems:"center",gap:"0.5em"},children:[(0,s.jsx)("p",{children:T("account:rewards.sponsor.p6")}),(0,s.jsx)(x.Z,{on:l,onClick:()=>{_(!0),(0,i.JS)(n,{auto_sponsor:!l}).then(e=>{_(!1),e.error&&console.error(e)}),u(!l)}}),m&&(0,s.jsx)(d.Z,{})]}),l&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("p",{children:T("account:rewards.sponsor.p7")}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p8")}),(0,s.jsxs)("div",{className:j().row,children:[(0,s.jsxs)("p",{children:[T("common:email-address"),":"]}),(0,s.jsx)("form",{onSubmit:O,children:(0,s.jsx)("input",{type:"text",value:f,onChange:e=>{w(e.target.value)}})}),(0,s.jsx)(p.Z,{disabled:!(0,S.isEmail)(f)&&f.length,tooltip:T("common:invalid-email"),children:(0,s.jsx)("div",{className:"".concat(j().iconBtn," ").concat(f!==r.notify_email&&j().highlight),onClick:e=>{y(!0),(0,i.JS)(n,{notify_email:f.trim()||null}).then(e=>{y(!1),o({...r,notify_email:f.trim()||""}),e.error&&console.error(e)})},children:g?(0,s.jsx)(d.Z,{}):f!==r.notify_email?(0,s.jsx)(h.tfk,{}):(0,s.jsx)(h.HhX,{})})})]}),(0,s.jsx)("p",{children:T("account:rewards.sponsor.p9")})]}),(0,s.jsx)(b.Z,{})]})},I=()=>{let{t:e}=(0,a.$G)(["common","account"]);return(0,s.jsxs)("div",{children:[(0,s.jsx)("h1",{children:e("account:rewards.stakeholder.title")}),(0,s.jsx)("p",{children:e("account:rewards.stakeholder.p1")}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:rewards.stakeholder.p2",t:e,components:{lnk:(0,s.jsx)(w.Z,{href:"/about-contact"})}})})]})};let N=(e,n,t)=>{switch(e){case"Other":return(0,s.jsx)(_,{uuid:n,patron:t});case"Early Access":return(0,s.jsx)(v,{});case"Offline Access":return(0,s.jsx)(C,{uuid:n,patron:t});case"Sponsor":return(0,s.jsx)(k,{uuid:n,patron:t});case"Stakeholder":return(0,s.jsx)(I,{});default:return null}};var G=!0,T=()=>{let{user:e,isLoading:n}=(0,o.aF)(),[t,h]=(0,c.useState)(null),[p,x]=(0,c.useState)({}),m=(0,r.useRouter)(),j=m.query.returnTo,{t:_}=(0,a.$G)(["common","account"]);return((0,c.useEffect)(()=>{t?(0,i.qS)(t).then(e=>{x(e)}):e&&h(e.sub.split("|").pop())},[e,t]),n)?(0,s.jsx)(u.Z,{title:"Account",url:"/account",children:(0,s.jsx)(d.Z,{})}):e?Object.keys(p).length?p.error?(0,s.jsxs)(u.Z,{title:_("account:account"),url:"/account",children:[(0,s.jsx)("h1",{children:_("account:account")}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:not-patron",t:_,components:{lnk:(0,s.jsx)(w.Z,{href:"/about-contact"})}})}),(0,s.jsx)("p",{children:(0,s.jsx)("pre",{children:JSON.stringify(p,null,2)})})]}):"active_patron"!==p.status?(0,s.jsxs)(u.Z,{title:_("account:account"),url:"/account",children:[(0,s.jsxs)("h1",{children:[_("account:hi")," ",p.display_name||p.name,"!"]}),(0,s.jsx)("p",{children:_("account:not-patron-anymore")})]}):(0,s.jsxs)(u.Z,{title:_("account:account"),url:"/account",children:[(0,s.jsxs)("h1",{title:t,style:{textAlign:"center"},children:[_("account:hi")," ",(p.display_name||p.name).trim(),"!"]}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:support-amount",t:_,values:{amount:p.cents/100}})}),p.rewards.length>0&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("p",{children:_("account:reward",{count:p.rewards.length})}),p.rewards.map((e,n)=>(0,s.jsx)("div",{children:N(e,t,p)},n))]})]}):(0,s.jsx)(u.Z,{title:_("account:account"),url:"/account",children:(0,s.jsx)(d.Z,{})}):(0,s.jsxs)(u.Z,{title:_("account:title"),url:"/account",children:[(0,s.jsx)("h1",{children:_("account:title")}),(0,s.jsx)("p",{children:(0,s.jsx)(a.cC,{i18nKey:"account:login.p1",t:_,components:{lnk:(0,s.jsx)("a",{href:"https://www.patreon.com/polyhaven/overview"})}})}),(0,s.jsx)("p",{children:_("account:login.p2")}),(0,s.jsxs)("ul",{children:[(0,s.jsx)("li",{children:_("account:login.li1")}),(0,s.jsx)("li",{children:_("account:login.li2")}),(0,s.jsx)("li",{children:_("account:login.li3")}),(0,s.jsx)("li",{children:_("account:login.li4")})]}),(0,s.jsx)(l.Z,{text:_("account:title"),href:"/api/auth/login".concat(j?"?returnTo=".concat(j):"")})]})}},19522:function(e,n,t){"use strict";async function s(e){let n=null;return await fetch("/api/patronInfo",{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({uuid:e})}).then(e=>e.json()).then(e=>{n=e}),n}async function r(e,n){n.uuid=e;let t=null;return await fetch("/api/setPatronInfo",{method:"PATCH",headers:{"Content-Type":"application/json"},body:JSON.stringify(n)}).then(e=>e.json()).then(e=>{t=e}),t}async function c(e,n){let t=null;return await fetch("/api/nextcloudInvite",{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({uuid:e,email:n})}).then(e=>e.json()).then(e=>{t=e}),t}async function o(e,n){let t=null;return await fetch("/api/sponsorAsset",{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({uuid:e,assetID:n})}).then(e=>e.json()).then(e=>{t=e}),t}t.d(n,{Cz:function(){return c},JS:function(){return r},h0:function(){return o},qS:function(){return s}})},56205:function(e){e.exports={page:"TextPage_page__5oWrw"}},3797:function(e){e.exports={gridItem:"GridItem_gridItem__0cuEz",text:"GridItem_text__HzSp8",badge:"GridItem_badge__o1VhV",badgeSample:"GridItem_badgeSample__QRzsc",soon:"GridItem_soon__xmWuE",indicators:"GridItem_indicators__QSdju",authorInner:"GridItem_authorInner__7xwsr",blur:"GridItem_blur__30m7f",thumb:"GridItem_thumb__M8icc",skelly:"GridItem_skelly__0vtAV",turnaround:"GridItem_turnaround__3Suwu",showText:"GridItem_showText__Omf4U",new:"GridItem_new__I7hTW",indicator:"GridItem_indicator__8mc__",author:"GridItem_author__rjldT",small:"GridItem_small__aeYnn"}},56147:function(e){e.exports={row:"RewardInfo_row__Fu_kZ",iconBtn:"RewardInfo_iconBtn__lR0UC",highlight:"RewardInfo_highlight__Hsxle"}},80180:function(e){e.exports={disabled:"Disabled_disabled__Fv72R",contents:"Disabled_contents__sFa7N"}},66906:function(e){e.exports={wrapper:"Loader_wrapper__pilXX",loader:"Loader_loader__aJvC_",load7:"Loader_load7__1ZrUp",spawn:"Loader_spawn__Fp5Cj",spinner:"Loader_spinner__nmoY9"}},47307:function(e){e.exports={wrapper:"Switch_wrapper__QFtkD",label:"Switch_label__TCYCF",sel:"Switch_sel___PoN0",toggle:"Switch_toggle___69Dy",on:"Switch_on__8zGFq"}},92360:function(e){e.exports={tooltip:"Tooltip_tooltip__Dzryr"}}},function(e){e.O(0,[3415,260,9734,4762,8966,2010,9774,2888,179],function(){return e(e.s=54641)}),_N_E=e.O()}]);