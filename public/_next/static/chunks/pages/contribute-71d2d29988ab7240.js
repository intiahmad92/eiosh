(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[8493],{63659:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/contribute",function(){return r(3650)}])},2308:function(e,t,r){"use strict";var o=r(85893),s=r(48155),l=r(28368),n=r(56205),i=r.n(n);let a=e=>{let{title:t,description:r,url:n,children:a}=e;return(0,o.jsxs)(l.Z,{children:[(0,o.jsx)(s.Z,{title:t,description:r,url:n}),(0,o.jsx)("div",{className:i().page,children:a})]})};a.defaultProps={description:"The Public 3D Asset Library"},t.Z=a},84436:function(e,t,r){"use strict";var o=r(85893),s=r(24762),l=r(92360),n=r.n(l);let i=e=>{let{id:t,place:r}=e;return(0,o.jsx)(s.Z,{id:t,place:r,delayShow:250,multiline:!0,border:!0,borderColor:"rgba(190, 111, 255, 0.5)",backgroundColor:"rgb(60, 60, 60)",className:n().tooltip})};i.defaultProps={id:null,place:null},t.Z=i},95677:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),function(e,t){for(var r in t)Object.defineProperty(e,r,{enumerable:!0,get:t[r]})}(t,{noSSR:function(){return n},default:function(){return i}});let o=r(38754),s=(r(67294),o._(r(8976)));function l(e){return{default:(null==e?void 0:e.default)||e}}function n(e,t){return delete t.webpack,delete t.modules,e(t)}function i(e,t){let r=s.default,o={loading:e=>{let{error:t,isLoading:r,pastDelay:o}=e;return null}};e instanceof Promise?o.loader=()=>e:"function"==typeof e?o.loader=e:"object"==typeof e&&(o={...o,...e}),o={...o,...t};let i=o.loader;return(o.loadableGenerated&&(o={...o,...o.loadableGenerated},delete o.loadableGenerated),"boolean"!=typeof o.ssr||o.ssr)?r({...o,loader:()=>null!=i?i().then(l):Promise.resolve(l(()=>null))}):(delete o.webpack,delete o.modules,n(r,o))}("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},92254:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"LoadableContext",{enumerable:!0,get:function(){return l}});let o=r(38754),s=o._(r(67294)),l=s.default.createContext(null)},8976:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"default",{enumerable:!0,get:function(){return p}});let o=r(38754),s=o._(r(67294)),l=r(92254),n=[],i=[],a=!1;function u(e){let t=e(),r={loading:!0,loaded:null,error:null};return r.promise=t.then(e=>(r.loading=!1,r.loaded=e,e)).catch(e=>{throw r.loading=!1,r.error=e,e}),r}class d{promise(){return this._res.promise}retry(){this._clearTimeouts(),this._res=this._loadFn(this._opts.loader),this._state={pastDelay:!1,timedOut:!1};let{_res:e,_opts:t}=this;e.loading&&("number"==typeof t.delay&&(0===t.delay?this._state.pastDelay=!0:this._delay=setTimeout(()=>{this._update({pastDelay:!0})},t.delay)),"number"==typeof t.timeout&&(this._timeout=setTimeout(()=>{this._update({timedOut:!0})},t.timeout))),this._res.promise.then(()=>{this._update({}),this._clearTimeouts()}).catch(e=>{this._update({}),this._clearTimeouts()}),this._update({})}_update(e){this._state={...this._state,error:this._res.error,loaded:this._res.loaded,loading:this._res.loading,...e},this._callbacks.forEach(e=>e())}_clearTimeouts(){clearTimeout(this._delay),clearTimeout(this._timeout)}getCurrentValue(){return this._state}subscribe(e){return this._callbacks.add(e),()=>{this._callbacks.delete(e)}}constructor(e,t){this._loadFn=e,this._opts=t,this._callbacks=new Set,this._delay=null,this._timeout=null,this.retry()}}function c(e){return function(e,t){let r=Object.assign({loader:null,loading:null,delay:200,timeout:null,webpack:null,modules:null},t),o=null;function n(){if(!o){let t=new d(e,r);o={getCurrentValue:t.getCurrentValue.bind(t),subscribe:t.subscribe.bind(t),retry:t.retry.bind(t),promise:t.promise.bind(t)}}return o.promise()}if(!a){let e=r.webpack?r.webpack():r.modules;e&&i.push(t=>{for(let r of e)if(t.includes(r))return n()})}function u(e,t){!function(){n();let e=s.default.useContext(l.LoadableContext);e&&Array.isArray(r.modules)&&r.modules.forEach(t=>{e(t)})}();let i=s.default.useSyncExternalStore(o.subscribe,o.getCurrentValue,o.getCurrentValue);return s.default.useImperativeHandle(t,()=>({retry:o.retry}),[]),s.default.useMemo(()=>{var t;return i.loading||i.error?s.default.createElement(r.loading,{isLoading:i.loading,pastDelay:i.pastDelay,timedOut:i.timedOut,error:i.error,retry:o.retry}):i.loaded?s.default.createElement((t=i.loaded)&&t.default?t.default:t,e):null},[e,i])}return u.preload=()=>n(),u.displayName="LoadableComponent",s.default.forwardRef(u)}(u,e)}function h(e,t){let r=[];for(;e.length;){let o=e.pop();r.push(o(t))}return Promise.all(r).then(()=>{if(e.length)return h(e,t)})}c.preloadAll=()=>new Promise((e,t)=>{h(n).then(e,t)}),c.preloadReady=e=>(void 0===e&&(e=[]),new Promise(t=>{let r=()=>(a=!0,t());h(i,e).then(r,r)})),window.__NEXT_PRELOADREADY=c.preloadReady;let p=c},3650:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSG:function(){return b},default:function(){return g}});var o=r(85893),s=r(41664),l=r.n(s),n=r(5434),i=r(31137),a=r(2308),u=r(5152),d=r.n(u),c=r(65062),h=r(84436),p=r(4676),f=r.n(p);let m=d()(()=>r.e(8086).then(r.bind(r,8086)),{loadableGenerated:{webpack:()=>[8086]},ssr:!1});var y=e=>{let{data:t}=e,r=Object.keys(t);return r.sort((e,r)=>t[e].name.localeCompare(t[r].name)),r.sort((e,r)=>t[r].assetCount-t[e].assetCount),(0,o.jsxs)("div",{className:f().allArtists,children:[r.map(e=>(0,o.jsxs)(l(),{href:"/all?a=".concat(e),prefetch:!1,"data-tip":"".concat(e," (").concat(t[e].assetCount," ").concat(1===t[e].assetCount?"asset":"assets",")"),"data-for":"allAssets",className:f().avatar,children:[(0,o.jsx)(m,{id:e,size:50}),t[e].regular_donor?(0,o.jsx)("div",{className:f().regularDonor,"data-tip":"Regular asset donor","data-for":"allAssets",children:(0,o.jsx)(c.Z,{color:"#F96854"})}):null]},e)),(0,o.jsx)(h.Z,{id:"allAssets"})]})},b=!0,g=e=>{let{authors:t}=e;return(0,o.jsx)(a.Z,{title:"Contribute",description:"How to contribute your own 3D asset to Poly Haven.",url:"/contribute",children:(0,o.jsxs)("div",{dir:"ltr",style:{textAlign:"left"},children:[(0,o.jsx)("h1",{children:"Donate Your 3D Asset to Poly Haven"}),(0,o.jsx)(y,{data:t}),(0,o.jsx)("p",{children:"Have a top-notch 3D model/texture/hdri you'd like to publish on Poly Haven? We'd be happy to check it out :)"}),(0,o.jsx)("p",{children:"We do have a very high standard of quality and some strict legal requirements - please read the following before submitting your asset:"}),(0,o.jsx)("hr",{}),(0,o.jsx)("h2",{children:"Important"}),(0,o.jsxs)("p",{children:["Your asset must be ",(0,o.jsx)("strong",{children:"100% your own original work."})]}),(0,o.jsxs)("p",{children:["By sending us your asset, you will be releasing it under the ",(0,o.jsx)(l(),{href:"/license",children:"CC0 license"}),", forfeiting your copyright."]}),(0,o.jsxs)("p",{children:["Once we upload it to Poly Haven, anyone will be able to do anything they want with your asset, which is awesome and really generous of you, but it's important you understand that and know that it"," ",(0,o.jsx)("strong",{children:"cannot be revoked"}),". Once you declare something as CC0, it's in the public domain forever and cannot ever be made private again."]}),(0,o.jsxs)("p",{children:[(0,o.jsx)("strong",{children:"You cannot include any copyrighted materials in your asset"})," such as textures that you didn't make yourself, unless you have explicit permission to redistribute derivative work as CC0, or the textures are CC0 themselves."]}),(0,o.jsx)("p",{children:"If your asset includes any real-world logo, trademark, or copyrighted design, we cannot accept it."}),(0,o.jsx)("p",{children:"Similarly, if your asset is a digital copy of another design that you didn't make (e.g. real-world firearms, furniture, etc.), or based on someone else's concept art, we cannot publish it."}),(0,o.jsx)("p",{children:"Once your asset is approved, you'll be signing a legal agreement to confirm all of this and providing proof of authorship."}),(0,o.jsx)("hr",{}),(0,o.jsx)("h2",{children:"Requirements"}),(0,o.jsx)("p",{children:"Quality over quantity is key on the internet these days, so unfortunately that means we have to be very strict about reviewing your asset in order to maintain a high standard of quality on Poly Haven."}),(0,o.jsxs)("p",{children:["Feel free to chat to us on ",(0,o.jsx)(l(),{href:"https://discord.gg/Dms7Mrs",children:"Discord"})," if you're not sure the quality of your asset is high enough. We may be able to provide some feedback, or help you work on it."]}),(0,o.jsx)("h4",{children:"Requirements for 3D models:"}),(0,o.jsxs)("ul",{children:[(0,o.jsx)("li",{children:"Photorealistic, suitable for next-gen game engines and visual effects."}),(0,o.jsx)("li",{children:"Fully UV unwrapped and textured with standard PBR maps. If you have a complex procedural shader, this should be baked down to a simple set of images."}),(0,o.jsx)("li",{children:"Minimum 4k resolution textures, preferably 8k."}),(0,o.jsx)("li",{children:"In real-world scale."}),(0,o.jsx)("li",{children:"Uses only custom original textures, or textures that are CC0/public domain."}),(0,o.jsx)("li",{children:'In either ".blend" format, or a format we can import into Blender (fbx, usd, gltf, etc.).'}),(0,o.jsxs)("li",{children:["For reference, here's"," ",(0,o.jsx)("a",{href:"https://blog.polyhaven.com/simple-prop-workflow/",children:"how we make high quality 3D models"}),"."]}),(0,o.jsxs)("li",{children:["If you'd like to make our lives easier and get your asset published more quickly, please check out our"," ",(0,o.jsx)("a",{href:"https://docs.google.com/document/d/17vLGfCbouvwcp1mcbsMe892DB0QkGLoR3gSjLtsVTGM/edit?usp=sharing",children:"technical standards document"}),"."]})]}),(0,o.jsx)("h4",{children:"Requirements for Textures:"}),(0,o.jsxs)("ul",{children:[(0,o.jsx)("li",{children:"Created using photoscanning/photogrammetry."}),(0,o.jsx)("li",{children:"Full set of standard PBR maps - diffuse/albedo, roughness, metalness (if applicable), displacement, normal - not just a single image."}),(0,o.jsx)("li",{children:"Seamless/tileable on at least one axis."}),(0,o.jsx)("li",{children:"Minimum 8k resolution."}),(0,o.jsx)("li",{children:"As 16-bit PNGs."}),(0,o.jsxs)("li",{children:["For reference, here's"," ",(0,o.jsx)("a",{href:"https://blog.polyhaven.com/photoscanned-texture-creation-process/",children:"how we make high quality textures"}),"."]})]}),(0,o.jsx)("h4",{children:"Requirements for HDRIs:"}),(0,o.jsxs)("ul",{children:[(0,o.jsx)("li",{children:"Photo-based, no virtual scenes."}),(0,o.jsxs)("li",{children:["Created with a"," ",(0,o.jsx)("a",{href:"https://blog.polyhaven.com/how-to-create-high-quality-hdri/",children:"fully linear workflow"}),". No tonemapping, color/contrast adjustments, sharpening, or tone curve."]}),(0,o.jsxs)("li",{children:[(0,o.jsx)("a",{href:"https://blog.polyhaven.com/what-is-clipping/",children:"Unclipped"})," (complete dynamic range)."]}),(0,o.jsx)("li",{children:"Minimum 16k resolution."}),(0,o.jsx)("li",{children:"Separate macbeth color chart shot parallel to the ground, with the same exposure bracket as the rest of the pano, and merged to HDR file in the same way. Raw files (plus HDR) required."}),(0,o.jsx)("li",{children:"No avoidable or significant lens flares, stitching seams, or motion/depth blur."}),(0,o.jsx)("li",{children:"No recognizable people. If you can't mask them out or remove them, their faces need to be obscured."}),(0,o.jsx)("li",{children:"Tripod & shadow removed from bottom."}),(0,o.jsxs)("li",{children:["If you want to include backplates, there are more requirements for these,"," ",(0,o.jsx)(l(),{href:"/about-contact",children:"please get in touch"})," :)"]}),(0,o.jsxs)("li",{children:["For reference, here's"," ",(0,o.jsx)("a",{href:"https://blog.polyhaven.com/how-to-create-high-quality-hdri/",children:"how we make high quality HDRIs"}),"."]})]}),(0,o.jsx)("hr",{}),(0,o.jsx)("h2",{children:"Is there payment for this?"}),(0,o.jsx)("p",{children:"No, sorry. We have a very limitted budget which we need to use to support our staff to work on our own assets. However, when we hire artists to create new content, donors like you are the first people we look at."}),(0,o.jsx)("p",{children:"This may change in future, but for now it's simply a selfless donation to the community."}),(0,o.jsx)("p",{children:"If we publish your asset, you obviously receive full credit, and we can optionally include a link to your PayPal/Patreon/Ko-fi account in case someone wants to donate to you directly."}),(0,o.jsx)("hr",{}),(0,o.jsxs)("div",{style:{display:"flex",flexDirection:"row",alignItems:"center",justifyContent:"center",gap:"1em"},children:[(0,o.jsx)("h2",{style:{margin:0},children:"Ready to donate?"}),(0,o.jsx)(i.Z,{text:"Submit your asset!",icon:(0,o.jsx)(n.kiA,{}),href:"https://forms.gle/jvaKUR6KPcVfhLiU6"})]})]})})}},56205:function(e){e.exports={page:"TextPage_page__5oWrw"}},4676:function(e){e.exports={allArtists:"AllArtists_allArtists__vphKG",avatar:"AllArtists_avatar__KlDq8",regularDonor:"AllArtists_regularDonor__IOt_f",pulse:"AllArtists_pulse__whZ1Y"}},92360:function(e){e.exports={tooltip:"Tooltip_tooltip__Dzryr"}},5152:function(e,t,r){e.exports=r(95677)}},function(e){e.O(0,[3415,9734,4762,2010,9774,2888,179],function(){return e(e.s=63659)}),_N_E=e.O()}]);