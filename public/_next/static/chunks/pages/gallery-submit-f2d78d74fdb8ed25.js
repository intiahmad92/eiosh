(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[5313],{42127:function(e,l,s){(window.__NEXT_P=window.__NEXT_P||[]).push(["/gallery-submit",function(){return s(47518)}])},2308:function(e,l,s){"use strict";var t=s(85893),a=s(48155),i=s(28368),r=s(56205),n=s.n(r);let o=e=>{let{title:l,description:s,url:r,children:o}=e;return(0,t.jsxs)(i.Z,{children:[(0,t.jsx)(a.Z,{title:l,description:s,url:r}),(0,t.jsx)("div",{className:n().page,children:o})]})};o.defaultProps={description:"The Public 3D Asset Library"},l.Z=o},7522:function(e,l,s){"use strict";var t=s(85893),a=s(41664),i=s.n(a);l.Z=e=>(0,t.jsx)(i(),{...e,href:e.href||"",children:e.children})},40133:function(e,l,s){"use strict";var t=s(85893),a=s(84436),i=s(80180),r=s.n(i);let n=e=>{let{disabled:l,tooltip:s,tooltipSide:i,style:n,children:o}=e;return l?(0,t.jsxs)("div",{className:r().disabled,"data-tip":s,style:n,children:[(0,t.jsx)("div",{className:r().contents,children:o}),(0,t.jsx)(a.Z,{place:i})]}):o};n.defaultProps={disabled:!0,style:{},tooltip:null,tooltipSide:null},l.Z=n},84436:function(e,l,s){"use strict";var t=s(85893),a=s(24762),i=s(92360),r=s.n(i);let n=e=>{let{id:l,place:s}=e;return(0,t.jsx)(a.Z,{id:l,place:s,delayShow:250,multiline:!0,border:!0,borderColor:"rgba(190, 111, 255, 0.5)",backgroundColor:"rgb(60, 60, 60)",className:r().tooltip})};n.defaultProps={id:null,place:null},l.Z=n},21059:function(e,l,s){"use strict";s.d(l,{Z:function(){return a}});var t=s(11163);function a(){let e=(0,t.useRouter)(),l=/\[.+\]/.test(e.route)||/\?./.test(e.asPath),s=!l||Object.keys(e.query).length>0;return s?e.query:null}},47518:function(e,l,s){"use strict";s.r(l),s.d(l,{__N_SSG:function(){return G},default:function(){return P}});var t=s(85893),a=s(28276),i=s(2308),r=s(67294),n=s(41664),o=s.n(n),u=s(63318),c=s.n(u),m=s(7522),d=s(74472),p=s(48966),b=s(23157),h=s(58620),x=s(26671),j=s.n(x);let g=e=>{let{label:l,description:s,optional:i,children:r}=e,{t:n}=(0,a.$G)("common");return(0,t.jsxs)("div",{className:j().formItem,children:[(0,t.jsxs)("div",{className:j().row,children:[(0,t.jsxs)("span",{className:j().label,children:[l,":"]}),r,i?(0,t.jsxs)("em",{children:["(",n("optional").toLocaleLowerCase(),")"]}):null]}),s?(0,t.jsx)("p",{children:s}):null]})};g.defaultProps={description:null,optional:!1};var f=s(40133),_=s(34229),v=s.n(_),y=e=>{let{show:l,hide:s,children:a}=e;return l?(0,t.jsx)("div",{className:v().wrapper,onClick:s,children:(0,t.jsxs)("div",{className:v().popup,children:[a,(0,t.jsx)("div",{className:v().buttonWrapper,children:(0,t.jsx)("div",{className:v().button,children:"OK"})})]})}):null},S=s(21059),N=s(82511),w=s.n(N);let k={option:(e,l)=>({...e,background:l.isFocused?"#666":"#333",color:"#eee"}),control:e=>({...e,background:"#333",borderColor:"#444"}),menu:(e,l)=>({...e,background:"#333",marginTop:"0"}),input:(e,l)=>({...e,color:"#eee"}),singleValue:(e,l)=>({...e,color:"#eee"}),multiValue:(e,l)=>({...e,color:"red",background:"#444"}),valueLabel:(e,l)=>({...e,color:"#eee"}),multiValueLabel:(e,l)=>({...e,color:"#eee"}),multiValueRemove:(e,l)=>({...e,color:"#888",cursor:"pointer"})};var C=e=>{let{assets:l,galleryApiUrl:s}=e,{t:i}=(0,a.$G)("common"),{t:n}=(0,a.$G)("gallery"),[u,x]=(0,r.useState)(!1),_=(0,S.Z)(),[v,N]=(0,r.useState)(null),C=(0,r.useRef)(null),[G,P]=(0,r.useState)(null),[Z,W]=(0,r.useState)(""),[D,E]=(0,d.Z)("gallery_author",""),[A,T]=(0,d.Z)("gallery_email",""),[R,K]=(0,d.Z)("gallery_link",""),[I,L]=(0,r.useState)([]),[O,F]=(0,r.useState)([]),[U,V]=(0,r.useState)(!1);(0,r.useEffect)(()=>{_&&_.asset&&"string"==typeof _.asset&&l.includes(_.asset)&&L([{value:_.asset,label:_.asset}])},[_]);let z=()=>{N(null),P(null),W(""),L([]),F([])},q={"Selected image":null!==v,"Your name":D.trim().length>0,Email:(0,p.isEmail)(A.trim()),Link:0==R.trim().length||(0,p.isURL)(R.trim(),{require_protocol:!0}),"Assets used":I.length>0},M=[],B=!0;for(let[e,l]of Object.entries(q))!1===l&&(B=!1,M.push(e));U||M.push("CAPTCHA Verification");let[Y,$]=(0,r.useState)(!1),[H,X]=(0,r.useState)({}),J=async()=>{$(!0);let e={artwork_name:Z.trim(),author:D.trim(),email:A.trim(),author_link:R.trim(),assets_used:I.map(e=>e.value),software:O.map(e=>e.value),uuid:localStorage.getItem("uuid")||"UNKNOWN"},l=new FormData;l.append("file",v),l.append("fields",JSON.stringify(e)),await fetch("".concat(s,"/api/public/gallerySubmit"),{method:"POST",body:l}).then(e=>e.json()).then(e=>{console.log("Submitted to Gallery",e),$(!1),X(e),"Submitted"===e.message&&(z(),e.message="",x(!0))})},Q=[];for(let e of l)Q.push({value:e,label:e});return(0,t.jsxs)("div",{className:j().wrapper,children:[(0,t.jsx)("h1",{children:n("submit.title")}),(0,t.jsx)("p",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s1p1",t:n,components:{lnk:(0,t.jsx)(m.Z,{href:"/gallery"})}})}),(0,t.jsx)("p",{children:n("submit.s1p2")}),(0,t.jsx)("p",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s1p3",t:n,components:{em:(0,t.jsx)("em",{})}})}),(0,t.jsx)("h2",{children:n("submit.s2")}),(0,t.jsxs)("ol",{children:[(0,t.jsx)("li",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s2p1",t:n,components:{strong:(0,t.jsx)("strong",{})}})}),(0,t.jsx)("li",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s2p2",t:n,components:{strong:(0,t.jsx)("strong",{})}})}),(0,t.jsx)("li",{children:n("submit.s2p3")})]}),(0,t.jsx)("h2",{children:n("submit.s3")}),(0,t.jsx)("p",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s3p1",t:n,components:{strong:(0,t.jsx)("strong",{})}})}),(0,t.jsx)("p",{children:n("submit.s3p2")}),(0,t.jsx)("p",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s3p3",t:n,components:{lnk:(0,t.jsx)("a",{href:"https://discord.gg/Dms7Mrs"})}})}),(0,t.jsx)("p",{children:n("submit.s3p4")}),(0,t.jsx)("p",{children:n("submit.s3p5")}),(0,t.jsxs)("ul",{children:[(0,t.jsx)("li",{children:n("submit.s3p5l1")}),(0,t.jsx)("li",{children:n("submit.s3p5l2")}),(0,t.jsx)("li",{children:n("submit.s3p5l3")}),(0,t.jsx)("li",{children:n("submit.s3p5l4")}),(0,t.jsx)("li",{children:n("submit.s3p5l5")}),(0,t.jsx)("li",{children:(0,t.jsx)(a.cC,{i18nKey:"submit.s3p5l6",t:n,components:{strong:(0,t.jsx)("strong",{})}})})]}),(0,t.jsxs)("div",{className:j().form,children:[(0,t.jsxs)("form",{onSubmit:e=>{e.preventDefault()},children:[G?(0,t.jsx)("div",{className:j().imagePreview,children:(0,t.jsx)("img",{src:G})}):null,(0,t.jsx)("div",{className:j().buttonWrapper,children:(0,t.jsxs)("label",{htmlFor:"upload-image",className:"".concat(w().button," ").concat(w()[v?"hollow":"accent"]," ").concat(j().imageSelect),children:[v?n("submit.form.file-change"):n("submit.form.select-change"),(0,t.jsx)("br",{}),(0,t.jsx)("span",{className:j().sub,children:n("submit.form.file-size")})]})}),(0,t.jsx)("input",{type:"file",ref:C,name:"myImage",id:"upload-image",className:j().hideFileInput,onChange:e=>{if(e.target.files&&e.target.files[0]){let l=e.target.files[0];if("image/jpeg"!==l.type){alert(n("submit.err-jpg"));return}if(l.size>1048576){alert(n("submit.err-size"));return}N(l),P(URL.createObjectURL(l))}}}),(0,t.jsx)(g,{label:n("submit.form.art-name"),optional:!0,children:(0,t.jsx)("input",{type:"text",value:Z,onChange:e=>W(e.target.value)})}),(0,t.jsx)(g,{label:n("submit.form.your-name"),children:(0,t.jsx)("input",{type:"text",value:D,onChange:e=>E(e.target.value),placeholder:n("submit.form.your-name-d")})}),(0,t.jsx)(g,{label:n("submit.form.your-email"),children:(0,t.jsx)("input",{type:"text",value:A,onChange:e=>T(e.target.value),placeholder:n("submit.form.your-email-d")})}),(0,t.jsx)(g,{label:n("submit.form.link"),optional:!0,children:(0,t.jsx)("input",{type:"text",value:R,onChange:e=>K(e.target.value),placeholder:n("submit.form.link-d")})}),(0,t.jsx)(g,{label:n("submit.form.software"),optional:!0,children:(0,t.jsx)(h.Z,{styles:k,className:j().select,isMulti:!0,onChange:e=>{F(e)},options:[{value:"blender",label:"Blender"},{value:"3ds max",label:"3DS Max"},{value:"maya",label:"Maya"},{value:"cinema 4d",label:"Cinema 4D"},{value:"houdini",label:"Houdini"},{value:"daz",label:"Daz 3D"},{value:"lightwave",label:"LightWave"},{value:"vred",label:"VRED"},{value:"modo",label:"Modo"},{value:"zbrush",label:"ZBrush"},{value:"unreal",label:"Unreal Engine"},{value:"unity",label:"Unity"},{value:"Godot",label:"Godot"},{value:"sketchup",label:"SketchUp"},{value:"fusion360",label:"Fusion 360"},{value:"rhino",label:"Rhino"},{value:"solidworks",label:"SolidWorks"},{value:"cycles",label:"Cycles"},{value:"eevee",label:"Eevee"},{value:"corona",label:"Corona"},{value:"vray",label:"V-Ray"},{value:"keyshot",label:"KeyShot"},{value:"arnold",label:"Arnold Renderer"},{value:"redshift",label:"Redshift"},{value:"octane",label:"Octane"}],value:O,placeholder:n("submit.form.software-d")})}),(0,t.jsx)(g,{label:n("submit.form.assets"),children:(0,t.jsxs)("div",{className:j().assetSelectionWrapper,children:[(0,t.jsx)(b.ZP,{styles:k,className:j().select,isMulti:!0,onChange:e=>{if(e.length>10){alert(n("submit.err-asset-limit",{limit:10}));return}L(e)},options:Q,value:I,placeholder:n("submit.form.assets-d")}),I?(0,t.jsx)("div",{className:j().assetsWrapper,children:I.map(e=>(0,t.jsx)(o(),{href:"/a/".concat(e.value),children:(0,t.jsx)("img",{src:"https://cdn.polyhaven.com/asset_img/thumbs/".concat(e.value,".png?height=100&width=200")})},e.value))}):null]})})]}),(0,t.jsxs)("div",{className:j().submit,children:[(0,t.jsx)("div",{className:"spacer"}),(0,t.jsx)("div",{children:Object.keys(H).length?H.message:null}),(0,t.jsx)(f.Z,{tooltip:Y?i("please-wait"):"".concat(i("missing-invalid"),": ").concat(M.join(", ")),disabled:!B||Y||!U,children:(0,t.jsx)("div",{className:"".concat(w().button," ").concat(w().accent),onClick:J,children:(0,t.jsx)("div",{className:w().inner,children:Y?n("submit.form.uploading"):"\uD83D\uDE80 ".concat(n("submit.form.submit"))})})}),(0,t.jsx)(c(),{sitekey:"0x4AAAAAAAEEuWAzktXa7tBj",onVerify:e=>{V(!0),console.log("Turnstile verified!")},onError:e=>{console.log("Turnstile error: ",e)},onExpire:()=>{console.log("Turnstile expired!")},onTimeout:()=>{console.log("Turnstile timed out!")},appearance:"interaction-only"})]})]}),(0,t.jsxs)(y,{show:u,hide:e=>x(!1),children:[(0,t.jsxs)("p",{children:["✅ ",(0,t.jsx)("strong",{children:n("submit.form.thanks")})]}),(0,t.jsx)("p",{children:n("submit.form.thanks-d")})]})]})},G=!0;function P(e){let{t:l}=(0,a.$G)(["common","gallery"]);return(0,t.jsx)(i.Z,{title:l("gallery:submit.title"),description:l("gallery:submit.description"),url:"/gallery-submit",children:(0,t.jsx)(C,{assets:e.assets,galleryApiUrl:e.galleryApiUrl})})}},26671:function(e){e.exports={row:"GallerySubmit_row__7glnI",form:"GallerySubmit_form__djgeP",formItem:"GallerySubmit_formItem__9ilFI",label:"GallerySubmit_label__sxVWl",imagePreview:"GallerySubmit_imagePreview__yvqaN",buttonWrapper:"GallerySubmit_buttonWrapper__Ysc6w",imageSelect:"GallerySubmit_imageSelect__kY4DL",sub:"GallerySubmit_sub__Np0iC",hideFileInput:"GallerySubmit_hideFileInput__KqW8_",select:"GallerySubmit_select__RZBPV",assetSelectionWrapper:"GallerySubmit_assetSelectionWrapper__baHqK",assetsWrapper:"GallerySubmit_assetsWrapper___xEDA",submit:"GallerySubmit_submit__9UM4e"}},56205:function(e){e.exports={page:"TextPage_page__5oWrw"}},80180:function(e){e.exports={disabled:"Disabled_disabled__Fv72R",contents:"Disabled_contents__sFa7N"}},34229:function(e){e.exports={wrapper:"Popup_wrapper__7TuC9",popup:"Popup_popup__YjCIl",buttonWrapper:"Popup_buttonWrapper__ngyqn",button:"Popup_button__lft3_"}},92360:function(e){e.exports={tooltip:"Tooltip_tooltip__Dzryr"}}},function(e){e.O(0,[3415,9734,4762,8966,6870,2010,9774,2888,179],function(){return e(e.s=42127)}),_N_E=e.O()}]);