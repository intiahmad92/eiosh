(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2992],{74221:function(e,t,r){"use strict";function n(e){return Array.isArray?Array.isArray(e):"[object Array]"===a(e)}r.d(t,{Z:function(){return q}});let s=1/0;function i(e){return"string"==typeof e}function o(e){return"number"==typeof e}function l(e){return"object"==typeof e}function c(e){return null!=e}function h(e){return!e.trim().length}function a(e){return null==e?void 0===e?"[object Undefined]":"[object Null]":Object.prototype.toString.call(e)}let u=e=>`Invalid value for key ${e}`,f=e=>`Pattern length exceeds max of ${e}.`,d=e=>`Missing ${e} property in key`,p=e=>`Property 'weight' in key '${e}' must be a positive integer`,g=Object.prototype.hasOwnProperty;class m{constructor(e){this._keys=[],this._keyMap={};let t=0;e.forEach(e=>{let r=y(e);t+=r.weight,this._keys.push(r),this._keyMap[r.id]=r,t+=r.weight}),this._keys.forEach(e=>{e.weight/=t})}get(e){return this._keyMap[e]}keys(){return this._keys}toJSON(){return JSON.stringify(this._keys)}}function y(e){let t=null,r=null,s=null,o=1,l=null;if(i(e)||n(e))s=e,t=v(e),r=x(e);else{if(!g.call(e,"name"))throw Error(d("name"));let n=e.name;if(s=n,g.call(e,"weight")&&(o=e.weight)<=0)throw Error(p(n));t=v(n),r=x(n),l=e.getFn}return{path:t,id:r,weight:o,src:s,getFn:l}}function v(e){return n(e)?e:e.split(".")}function x(e){return n(e)?e.join("."):e}var b={isCaseSensitive:!1,includeScore:!1,keys:[],shouldSort:!0,sortFn:(e,t)=>e.score===t.score?e.idx<t.idx?-1:1:e.score<t.score?-1:1,includeMatches:!1,findAllMatches:!1,minMatchCharLength:1,location:0,threshold:.6,distance:100,useExtendedSearch:!1,getFn:function(e,t){let r=[],h=!1,u=(e,t,f)=>{if(c(e)){if(t[f]){var d,p;let g=t[f],m=e[g];if(c(m)){if(f===t.length-1&&(i(m)||o(m)||!0===(d=m)||!1===d||l(p=d)&&null!==p&&"[object Boolean]"==a(d)))r.push(null==m?"":function(e){if("string"==typeof e)return e;let t=e+"";return"0"==t&&1/e==-s?"-0":t}(m));else if(n(m)){h=!0;for(let e=0,r=m.length;e<r;e+=1)u(m[e],t,f+1)}else t.length&&u(m,t,f+1)}}else r.push(e)}};return u(e,i(t)?t.split("."):t,0),h?r:r[0]},ignoreLocation:!1,ignoreFieldNorm:!1,fieldNormWeight:1};let M=/[^ ]+/g;class w{constructor({getFn:e=b.getFn,fieldNormWeight:t=b.fieldNormWeight}={}){this.norm=function(e=1,t=3){let r=new Map,n=Math.pow(10,t);return{get(t){let s=t.match(M).length;if(r.has(s))return r.get(s);let i=1/Math.pow(s,.5*e),o=parseFloat(Math.round(i*n)/n);return r.set(s,o),o},clear(){r.clear()}}}(t,3),this.getFn=e,this.isCreated=!1,this.setIndexRecords()}setSources(e=[]){this.docs=e}setIndexRecords(e=[]){this.records=e}setKeys(e=[]){this.keys=e,this._keysMap={},e.forEach((e,t)=>{this._keysMap[e.id]=t})}create(){!this.isCreated&&this.docs.length&&(this.isCreated=!0,i(this.docs[0])?this.docs.forEach((e,t)=>{this._addString(e,t)}):this.docs.forEach((e,t)=>{this._addObject(e,t)}),this.norm.clear())}add(e){let t=this.size();i(e)?this._addString(e,t):this._addObject(e,t)}removeAt(e){this.records.splice(e,1);for(let t=e,r=this.size();t<r;t+=1)this.records[t].i-=1}getValueForItemAtKeyId(e,t){return e[this._keysMap[t]]}size(){return this.records.length}_addString(e,t){if(!c(e)||h(e))return;let r={v:e,i:t,n:this.norm.get(e)};this.records.push(r)}_addObject(e,t){let r={i:t,$:{}};this.keys.forEach((t,s)=>{let o=t.getFn?t.getFn(e):this.getFn(e,t.path);if(c(o)){if(n(o)){let e=[],t=[{nestedArrIndex:-1,value:o}];for(;t.length;){let{nestedArrIndex:r,value:s}=t.pop();if(c(s)){if(i(s)&&!h(s)){let t={v:s,i:r,n:this.norm.get(s)};e.push(t)}else n(s)&&s.forEach((e,r)=>{t.push({nestedArrIndex:r,value:e})})}}r.$[s]=e}else if(i(o)&&!h(o)){let e={v:o,n:this.norm.get(o)};r.$[s]=e}}}),this.records.push(r)}toJSON(){return{keys:this.keys,records:this.records}}}function _(e,t,{getFn:r=b.getFn,fieldNormWeight:n=b.fieldNormWeight}={}){let s=new w({getFn:r,fieldNormWeight:n});return s.setKeys(e.map(y)),s.setSources(t),s.create(),s}function k(e,{errors:t=0,currentLocation:r=0,expectedLocation:n=0,distance:s=b.distance,ignoreLocation:i=b.ignoreLocation}={}){let o=t/e.length;if(i)return o;let l=Math.abs(n-r);return s?o+l/s:l?1:o}class E{constructor(e,{location:t=b.location,threshold:r=b.threshold,distance:n=b.distance,includeMatches:s=b.includeMatches,findAllMatches:i=b.findAllMatches,minMatchCharLength:o=b.minMatchCharLength,isCaseSensitive:l=b.isCaseSensitive,ignoreLocation:c=b.ignoreLocation}={}){if(this.options={location:t,threshold:r,distance:n,includeMatches:s,findAllMatches:i,minMatchCharLength:o,isCaseSensitive:l,ignoreLocation:c},this.pattern=l?e:e.toLowerCase(),this.chunks=[],!this.pattern.length)return;let h=(e,t)=>{this.chunks.push({pattern:e,alphabet:function(e){let t={};for(let r=0,n=e.length;r<n;r+=1){let s=e.charAt(r);t[s]=(t[s]||0)|1<<n-r-1}return t}(e),startIndex:t})},a=this.pattern.length;if(a>32){let e=0,t=a%32,r=a-t;for(;e<r;)h(this.pattern.substr(e,32),e),e+=32;if(t){let e=a-32;h(this.pattern.substr(e),e)}}else h(this.pattern,0)}searchIn(e){let{isCaseSensitive:t,includeMatches:r}=this.options;if(t||(e=e.toLowerCase()),this.pattern===e){let t={isMatch:!0,score:0};return r&&(t.indices=[[0,e.length-1]]),t}let{location:n,distance:s,threshold:i,findAllMatches:o,minMatchCharLength:l,ignoreLocation:c}=this.options,h=[],a=0,u=!1;this.chunks.forEach(({pattern:t,alphabet:d,startIndex:p})=>{let{isMatch:g,score:m,indices:y}=function(e,t,r,{location:n=b.location,distance:s=b.distance,threshold:i=b.threshold,findAllMatches:o=b.findAllMatches,minMatchCharLength:l=b.minMatchCharLength,includeMatches:c=b.includeMatches,ignoreLocation:h=b.ignoreLocation}={}){let a;if(t.length>32)throw Error(f(32));let u=t.length,d=e.length,p=Math.max(0,Math.min(n,d)),g=i,m=p,y=l>1||c,v=y?Array(d):[];for(;(a=e.indexOf(t,m))>-1;)if(g=Math.min(k(t,{currentLocation:a,expectedLocation:p,distance:s,ignoreLocation:h}),g),m=a+u,y){let e=0;for(;e<u;)v[a+e]=1,e+=1}m=-1;let x=[],M=1,w=u+d,_=1<<u-1;for(let n=0;n<u;n+=1){let i=0,l=w;for(;i<l;){let e=k(t,{errors:n,currentLocation:p+l,expectedLocation:p,distance:s,ignoreLocation:h});e<=g?i=l:w=l,l=Math.floor((w-i)/2+i)}w=l;let c=Math.max(1,p-l+1),a=o?d:Math.min(p+l,d)+u,f=Array(a+2);f[a+1]=(1<<n)-1;for(let i=a;i>=c;i-=1){let o=i-1,l=r[e.charAt(o)];if(y&&(v[o]=+!!l),f[i]=(f[i+1]<<1|1)&l,n&&(f[i]|=(x[i+1]|x[i])<<1|1|x[i+1]),f[i]&_&&(M=k(t,{errors:n,currentLocation:o,expectedLocation:p,distance:s,ignoreLocation:h}))<=g){if(g=M,(m=o)<=p)break;c=Math.max(1,2*p-m)}}let b=k(t,{errors:n+1,currentLocation:p,expectedLocation:p,distance:s,ignoreLocation:h});if(b>g)break;x=f}let E={isMatch:m>=0,score:Math.max(.001,M)};if(y){let e=function(e=[],t=b.minMatchCharLength){let r=[],n=-1,s=-1,i=0;for(let o=e.length;i<o;i+=1){let o=e[i];o&&-1===n?n=i:o||-1===n||((s=i-1)-n+1>=t&&r.push([n,s]),n=-1)}return e[i-1]&&i-n>=t&&r.push([n,i-1]),r}(v,l);e.length?c&&(E.indices=e):E.isMatch=!1}return E}(e,t,d,{location:n+p,distance:s,threshold:i,findAllMatches:o,minMatchCharLength:l,includeMatches:r,ignoreLocation:c});g&&(u=!0),a+=m,g&&y&&(h=[...h,...y])});let d={isMatch:u,score:u?a/this.chunks.length:1};return u&&r&&(d.indices=h),d}}class ${constructor(e){this.pattern=e}static isMultiMatch(e){return I(e,this.multiRegex)}static isSingleMatch(e){return I(e,this.singleRegex)}search(){}}function I(e,t){let r=e.match(t);return r?r[1]:null}class L extends ${constructor(e,{location:t=b.location,threshold:r=b.threshold,distance:n=b.distance,includeMatches:s=b.includeMatches,findAllMatches:i=b.findAllMatches,minMatchCharLength:o=b.minMatchCharLength,isCaseSensitive:l=b.isCaseSensitive,ignoreLocation:c=b.ignoreLocation}={}){super(e),this._bitapSearch=new E(e,{location:t,threshold:r,distance:n,includeMatches:s,findAllMatches:i,minMatchCharLength:o,isCaseSensitive:l,ignoreLocation:c})}static get type(){return"fuzzy"}static get multiRegex(){return/^"(.*)"$/}static get singleRegex(){return/^(.*)$/}search(e){return this._bitapSearch.searchIn(e)}}class O extends ${constructor(e){super(e)}static get type(){return"include"}static get multiRegex(){return/^'"(.*)"$/}static get singleRegex(){return/^'(.*)$/}search(e){let t,r=0,n=[],s=this.pattern.length;for(;(t=e.indexOf(this.pattern,r))>-1;)r=t+s,n.push([t,r-1]);let i=!!n.length;return{isMatch:i,score:i?0:1,indices:n}}}let S=[class extends ${constructor(e){super(e)}static get type(){return"exact"}static get multiRegex(){return/^="(.*)"$/}static get singleRegex(){return/^=(.*)$/}search(e){let t=e===this.pattern;return{isMatch:t,score:t?0:1,indices:[0,this.pattern.length-1]}}},O,class extends ${constructor(e){super(e)}static get type(){return"prefix-exact"}static get multiRegex(){return/^\^"(.*)"$/}static get singleRegex(){return/^\^(.*)$/}search(e){let t=e.startsWith(this.pattern);return{isMatch:t,score:t?0:1,indices:[0,this.pattern.length-1]}}},class extends ${constructor(e){super(e)}static get type(){return"inverse-prefix-exact"}static get multiRegex(){return/^!\^"(.*)"$/}static get singleRegex(){return/^!\^(.*)$/}search(e){let t=!e.startsWith(this.pattern);return{isMatch:t,score:t?0:1,indices:[0,e.length-1]}}},class extends ${constructor(e){super(e)}static get type(){return"inverse-suffix-exact"}static get multiRegex(){return/^!"(.*)"\$$/}static get singleRegex(){return/^!(.*)\$$/}search(e){let t=!e.endsWith(this.pattern);return{isMatch:t,score:t?0:1,indices:[0,e.length-1]}}},class extends ${constructor(e){super(e)}static get type(){return"suffix-exact"}static get multiRegex(){return/^"(.*)"\$$/}static get singleRegex(){return/^(.*)\$$/}search(e){let t=e.endsWith(this.pattern);return{isMatch:t,score:t?0:1,indices:[e.length-this.pattern.length,e.length-1]}}},class extends ${constructor(e){super(e)}static get type(){return"inverse-exact"}static get multiRegex(){return/^!"(.*)"$/}static get singleRegex(){return/^!(.*)$/}search(e){let t=e.indexOf(this.pattern),r=-1===t;return{isMatch:r,score:r?0:1,indices:[0,e.length-1]}}},L],A=S.length,N=/ +(?=(?:[^\"]*\"[^\"]*\")*[^\"]*$)/,C=new Set([L.type,O.type]),j=[];function R(e,t){for(let r=0,n=j.length;r<n;r+=1){let n=j[r];if(n.condition(e,t))return new n(e,t)}return new E(e,t)}let T={AND:"$and",OR:"$or"},F={PATH:"$path",PATTERN:"$val"},P=e=>!!(e[T.AND]||e[T.OR]),W=e=>!!e[F.PATH],H=e=>!n(e)&&l(e)&&!P(e),z=e=>({[T.AND]:Object.keys(e).map(t=>({[t]:e[t]}))});function D(e,t,{auto:r=!0}={}){let s=e=>{let o=Object.keys(e),l=W(e);if(!l&&o.length>1&&!P(e))return s(z(e));if(H(e)){let n=l?e[F.PATH]:o[0],s=l?e[F.PATTERN]:e[n];if(!i(s))throw Error(u(n));let c={keyId:x(n),pattern:s};return r&&(c.searcher=R(s,t)),c}let c={children:[],operator:o[0]};return o.forEach(t=>{let r=e[t];n(r)&&r.forEach(e=>{c.children.push(s(e))})}),c};return P(e)||(e=z(e)),s(e)}function V(e,t){let r=e.matches;t.matches=[],c(r)&&r.forEach(e=>{if(!c(e.indices)||!e.indices.length)return;let{indices:r,value:n}=e,s={indices:r,value:n};e.key&&(s.key=e.key.src),e.idx>-1&&(s.refIndex=e.idx),t.matches.push(s)})}function K(e,t){t.score=e.score}class q{constructor(e,t={},r){this.options={...b,...t},this.options.useExtendedSearch,this._keyStore=new m(this.options.keys),this.setCollection(e,r)}setCollection(e,t){if(this._docs=e,t&&!(t instanceof w))throw Error("Incorrect 'index' type");this._myIndex=t||_(this.options.keys,this._docs,{getFn:this.options.getFn,fieldNormWeight:this.options.fieldNormWeight})}add(e){c(e)&&(this._docs.push(e),this._myIndex.add(e))}remove(e=()=>!1){let t=[];for(let r=0,n=this._docs.length;r<n;r+=1){let s=this._docs[r];e(s,r)&&(this.removeAt(r),r-=1,n-=1,t.push(s))}return t}removeAt(e){this._docs.splice(e,1),this._myIndex.removeAt(e)}getIndex(){return this._myIndex}search(e,{limit:t=-1}={}){let{includeMatches:r,includeScore:n,shouldSort:s,sortFn:l,ignoreFieldNorm:c}=this.options,h=i(e)?i(this._docs[0])?this._searchStringList(e):this._searchObjectList(e):this._searchLogical(e);return!function(e,{ignoreFieldNorm:t=b.ignoreFieldNorm}){e.forEach(e=>{let r=1;e.matches.forEach(({key:e,norm:n,score:s})=>{let i=e?e.weight:null;r*=Math.pow(0===s&&i?Number.EPSILON:s,(i||1)*(t?1:n))}),e.score=r})}(h,{ignoreFieldNorm:c}),s&&h.sort(l),o(t)&&t>-1&&(h=h.slice(0,t)),function(e,t,{includeMatches:r=b.includeMatches,includeScore:n=b.includeScore}={}){let s=[];return r&&s.push(V),n&&s.push(K),e.map(e=>{let{idx:r}=e,n={item:t[r],refIndex:r};return s.length&&s.forEach(t=>{t(e,n)}),n})}(h,this._docs,{includeMatches:r,includeScore:n})}_searchStringList(e){let t=R(e,this.options),{records:r}=this._myIndex,n=[];return r.forEach(({v:e,i:r,n:s})=>{if(!c(e))return;let{isMatch:i,score:o,indices:l}=t.searchIn(e);i&&n.push({item:e,idx:r,matches:[{score:o,value:e,norm:s,indices:l}]})}),n}_searchLogical(e){let t=D(e,this.options),r=(e,t,n)=>{if(!e.children){let{keyId:r,searcher:s}=e,i=this._findMatches({key:this._keyStore.get(r),value:this._myIndex.getValueForItemAtKeyId(t,r),searcher:s});return i&&i.length?[{idx:n,item:t,matches:i}]:[]}let s=[];for(let i=0,o=e.children.length;i<o;i+=1){let o=e.children[i],l=r(o,t,n);if(l.length)s.push(...l);else if(e.operator===T.AND)return[]}return s},n=this._myIndex.records,s={},i=[];return n.forEach(({$:e,i:n})=>{if(c(e)){let o=r(t,e,n);o.length&&(s[n]||(s[n]={idx:n,item:e,matches:[]},i.push(s[n])),o.forEach(({matches:e})=>{s[n].matches.push(...e)}))}}),i}_searchObjectList(e){let t=R(e,this.options),{keys:r,records:n}=this._myIndex,s=[];return n.forEach(({$:e,i:n})=>{if(!c(e))return;let i=[];r.forEach((r,n)=>{i.push(...this._findMatches({key:r,value:e[n],searcher:t}))}),i.length&&s.push({idx:n,item:e,matches:i})}),s}_findMatches({key:e,value:t,searcher:r}){if(!c(t))return[];let s=[];if(n(t))t.forEach(({v:t,i:n,n:i})=>{if(!c(t))return;let{isMatch:o,score:l,indices:h}=r.searchIn(t);o&&s.push({score:l,key:e,value:t,idx:n,norm:i,indices:h})});else{let{v:n,n:i}=t,{isMatch:o,score:l,indices:c}=r.searchIn(n);o&&s.push({score:l,key:e,value:n,norm:i,indices:c})}return s}}q.version="6.6.2",q.createIndex=_,q.parseIndex=function(e,{getFn:t=b.getFn,fieldNormWeight:r=b.fieldNormWeight}={}){let{keys:n,records:s}=e,i=new w({getFn:t,fieldNormWeight:r});return i.setKeys(n),i.setIndexRecords(s),i},q.config=b,q.parseQuery=D,function(...e){j.push(...e)}(class{constructor(e,{isCaseSensitive:t=b.isCaseSensitive,includeMatches:r=b.includeMatches,minMatchCharLength:n=b.minMatchCharLength,ignoreLocation:s=b.ignoreLocation,findAllMatches:i=b.findAllMatches,location:o=b.location,threshold:l=b.threshold,distance:c=b.distance}={}){this.query=null,this.options={isCaseSensitive:t,includeMatches:r,minMatchCharLength:n,findAllMatches:i,ignoreLocation:s,location:o,threshold:l,distance:c},this.pattern=t?e:e.toLowerCase(),this.query=function(e,t={}){return e.split("|").map(e=>{let r=e.trim().split(N).filter(e=>e&&!!e.trim()),n=[];for(let e=0,s=r.length;e<s;e+=1){let s=r[e],i=!1,o=-1;for(;!i&&++o<A;){let e=S[o],r=e.isMultiMatch(s);r&&(n.push(new e(r,t)),i=!0)}if(!i)for(o=-1;++o<A;){let e=S[o],r=e.isSingleMatch(s);if(r){n.push(new e(r,t));break}}}return n})}(this.pattern,this.options)}static condition(e,t){return t.useExtendedSearch}searchIn(e){let t=this.query;if(!t)return{isMatch:!1,score:1};let{includeMatches:r,isCaseSensitive:n}=this.options;e=n?e:e.toLowerCase();let s=0,i=[],o=0;for(let n=0,l=t.length;n<l;n+=1){let l=t[n];i.length=0,s=0;for(let t=0,n=l.length;t<n;t+=1){let n=l[t],{isMatch:c,indices:h,score:a}=n.search(e);if(c){if(s+=1,o+=a,r){let e=n.constructor.type;C.has(e)?i=[...i,...h]:i.push(h)}}else{o=0,s=0,i.length=0;break}}if(s){let e={isMatch:!0,score:o/s};return r&&(e.indices=i),e}}return{isMatch:!1,score:1}}})},91296:function(e,t,r){var n=0/0,s=/^\s+|\s+$/g,i=/^[-+]0x[0-9a-f]+$/i,o=/^0b[01]+$/i,l=/^0o[0-7]+$/i,c=parseInt,h="object"==typeof r.g&&r.g&&r.g.Object===Object&&r.g,a="object"==typeof self&&self&&self.Object===Object&&self,u=h||a||Function("return this")(),f=Object.prototype.toString,d=Math.max,p=Math.min,g=function(){return u.Date.now()};function m(e){var t=typeof e;return!!e&&("object"==t||"function"==t)}function y(e){if("number"==typeof e)return e;if("symbol"==typeof(t=e)||t&&"object"==typeof t&&"[object Symbol]"==f.call(t))return n;if(m(e)){var t,r="function"==typeof e.valueOf?e.valueOf():e;e=m(r)?r+"":r}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(s,"");var h=o.test(e);return h||l.test(e)?c(e.slice(2),h?2:8):i.test(e)?n:+e}e.exports=function(e,t,r){var n,s,i,o,l,c,h=0,a=!1,u=!1,f=!0;if("function"!=typeof e)throw TypeError("Expected a function");function v(t){var r=n,i=s;return n=s=void 0,h=t,o=e.apply(i,r)}function x(e){var r=e-c,n=e-h;return void 0===c||r>=t||r<0||u&&n>=i}function b(){var e,r,n,s=g();if(x(s))return M(s);l=setTimeout(b,(e=s-c,r=s-h,n=t-e,u?p(n,i-r):n))}function M(e){return(l=void 0,f&&n)?v(e):(n=s=void 0,o)}function w(){var e,r=g(),i=x(r);if(n=arguments,s=this,c=r,i){if(void 0===l)return h=e=c,l=setTimeout(b,t),a?v(e):o;if(u)return l=setTimeout(b,t),v(c)}return void 0===l&&(l=setTimeout(b,t)),o}return t=y(t)||0,m(r)&&(a=!!r.leading,i=(u="maxWait"in r)?d(y(r.maxWait)||0,t):i,f="trailing"in r?!!r.trailing:f),w.cancel=function(){void 0!==l&&clearTimeout(l),h=0,n=c=s=l=void 0},w.flush=function(){return void 0===l?o:M(g())},w}},25043:function(e,t,r){"use strict";r.d(t,{Z:function(){return a}});var n=r(67294),s=Object.defineProperty,i=(e,t,r)=>t in e?s(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,o=(e,t,r)=>(i(e,"symbol"!=typeof t?t+"":t,r),r);let l=(e,t)=>"u">typeof getComputedStyle?getComputedStyle(e,null).getPropertyValue(t):e.style.getPropertyValue(t),c=e=>l(e,"overflow")+l(e,"overflow-y")+l(e,"overflow-x"),h=e=>{if(!(e instanceof HTMLElement))return window;let t=e;for(;t&&!(t===document.body||t===document.documentElement||!t.parentNode);){if(/(scroll|auto)/.test(c(t)))return t;t=t.parentNode}return window};class a extends n.Component{constructor(e){super(e),o(this,"elementObserver"),o(this,"wrapper"),o(this,"lazyLoadHandler",e=>{var t,r;let{onContentVisible:n}=this.props,[s]=e,{isIntersecting:i}=s;if(i){this.setState({visible:!0},()=>{n&&n()});let e=null==(t=this.wrapper)?void 0:t.current;e&&e instanceof HTMLElement&&(null==(r=this.elementObserver)||r.unobserve(e))}}),this.elementObserver=null,this.wrapper=n.createRef(),this.state={visible:!1}}componentDidMount(){var e;this.getEventNode();let{offset:t,threshold:r}=this.props,n={rootMargin:"number"==typeof t?`${t}px`:t||"0px",threshold:r||0};this.elementObserver=new IntersectionObserver(this.lazyLoadHandler,n);let s=null==(e=this.wrapper)?void 0:e.current;s instanceof HTMLElement&&this.elementObserver.observe(s)}shouldComponentUpdate(e,t){return t.visible}componentWillUnmount(){var e,t;let r=null==(e=this.wrapper)?void 0:e.current;r&&r instanceof HTMLElement&&(null==(t=this.elementObserver)||t.unobserve(r))}getEventNode(){var e;return h(null==(e=this.wrapper)?void 0:e.current)}render(){let{children:e,className:t,height:r,width:s,elementType:i}=this.props,{visible:o}=this.state,l=`LazyLoad${o?" is-visible":""}${t?` ${t}`:""}`;return(0,n.createElement)(i||"div",{className:l,style:{height:r,width:s},ref:this.wrapper},o&&n.Children.only(e))}}o(a,"defaultProps",{elementType:"div",className:"",offset:0,threshold:0,width:null,onContentVisible:null,height:null})}}]);