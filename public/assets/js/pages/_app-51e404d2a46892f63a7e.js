_N_E=(window.webpackJsonp_N_E=window.webpackJsonp_N_E||[]).push([[9],{0:function(e,t,r){r("74v/"),e.exports=r("nOHt")},"74v/":function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/_app",function(){return r("cha2")}])},"8Bbg":function(e,t,r){e.exports=r("B5Ud")},B5Ud:function(e,t,r){"use strict";var n=r("o0o1"),o=r("lwsE"),c=r("W8MJ"),i=r("7W2i"),a=r("a1gu"),u=r("Nsbk"),s=r("yXPU");function l(e){var t=function(){if("undefined"===typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"===typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,n=u(e);if(t){var o=u(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return a(this,r)}}var p=r("TqRt");t.__esModule=!0,t.Container=function(e){0;return e.children},t.createUrl=v,t.default=void 0;var f=p(r("q1tI")),b=r("g/15");function h(e){return d.apply(this,arguments)}function d(){return(d=s(n.mark((function e(t){var r,o,c;return n.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.Component,o=t.ctx,e.next=3,(0,b.loadGetInitialProps)(r,o);case 3:return c=e.sent,e.abrupt("return",{pageProps:c});case 5:case"end":return e.stop()}}),e)})))).apply(this,arguments)}t.AppInitialProps=b.AppInitialProps,t.NextWebVitalsMetric=b.NextWebVitalsMetric;var y=function(e){i(r,e);var t=l(r);function r(){return o(this,r),t.apply(this,arguments)}return c(r,[{key:"componentDidCatch",value:function(e,t){throw e}},{key:"render",value:function(){var e=this.props,t=e.router,r=e.Component,n=e.pageProps,o=e.__N_SSG,c=e.__N_SSP;return f.default.createElement(r,Object.assign({},n,o||c?{}:{url:v(t)}))}}]),r}(f.default.Component);function v(e){var t=e.pathname,r=e.asPath,n=e.query;return{get query(){return n},get pathname(){return t},get asPath(){return r},back:function(){e.back()},push:function(t,r){return e.push(t,r)},pushTo:function(t,r){var n=r?t:"",o=r||t;return e.push(n,o)},replace:function(t,r){return e.replace(t,r)},replaceTo:function(t,r){var n=r?t:"",o=r||t;return e.replace(n,o)}}}t.default=y,y.origGetInitialProps=h,y.getInitialProps=h},Zk20:function(e,t,r){e.exports={"products-grid-app-root":"products-grid-app-root--65224",productsGridAppRoot:"products-grid-app-root--65224"}},cha2:function(e,t,r){"use strict";r.r(t);var n=r("rePB"),o=r("nKUr"),c=(r("Zk20"),r("q1tI")),i=r.n(c),a=r("17x9"),u=r.n(a);function s(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function l(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function p(e,t,r){return t&&l(e.prototype,t),r&&l(e,r),e}function f(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&h(e,t)}function b(e){return(b=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function h(e,t){return(h=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function d(e,t){return!t||"object"!==typeof t&&"function"!==typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function y(e){var t=function(){if("undefined"===typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"===typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,n=b(e);if(t){var o=b(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return d(this,r)}}var v,m,O,g=function(e){f(r,e);var t=y(r);function r(){return s(this,r),t.apply(this,arguments)}return p(r,[{key:"render",value:function(){return i.a.createElement("div",{className:"error"},i.a.createElement("div",null,"An Error Occurred"),i.a.createElement("div",null,this.error),i.a.createElement("div",null,this.info))}}]),r}(c.Component),W=function(e){f(r,e);var t=y(r);function r(e){var n;return s(this,r),(n=t.call(this,e)).state={error:null,info:null,errorOccurred:!1},n}return p(r,[{key:"componentDidCatch",value:function(e,t){this.setState({errorOccurred:!0,error:e,info:t}),this.props.honeybadger.notify(e,{context:t})}},{key:"render",value:function(){if(this.state.errorOccurred){var e=this.props.ErrorComponent;return e?i.a.createElement(e,this.state):i.a.createElement(g,null)}return this.props.children}}],[{key:"getDerivedStateFromError",value:function(e){return{errorOccurred:!0,error:e}}}]),r}(c.Component);v=W,m="propTypes",O={honeybadger:u.a.object,children:u.a.element,ErrorComponent:u.a.oneOfType([u.a.element,u.a.func])},m in v?Object.defineProperty(v,m,{value:O,enumerable:!0,configurable:!0,writable:!0}):v[m]=O;var P=W,j=r("o0o1"),w=r.n(j),_=r("HaE+"),S=r("Ff2n"),x=r("VX74"),E=r("8Bbg"),k=r.n(E),I=r("8Kt/"),C=r.n(I),D=r("zC+P"),T=r("Bdln"),R=r("H8+m");function N(e){return new T.ApolloLink((function(t,r){return new R.c((function(n){var o,c,i;try{o=r(t).subscribe({next:function(o){o.errors&&(i=e({graphQLErrors:o.errors,response:o,operation:t,forward:r}))?c=i.subscribe({next:n.next.bind(n),error:n.error.bind(n),complete:n.complete.bind(n)}):n.next(o)},error:function(o){(i=e({operation:t,networkError:o,graphQLErrors:o&&o.result&&o.result.errors,forward:r}))?c=i.subscribe({next:n.next.bind(n),error:n.error.bind(n),complete:n.complete.bind(n)}):n.error(o)},complete:function(){i||n.complete.bind(n)()}})}catch(a){e({networkError:a,operation:t,forward:r}),n.error(a)}return function(){o&&o.unsubscribe(),c&&o.unsubscribe()}}))}))}!function(e){function t(t){var r=e.call(this)||this;return r.link=N(t),r}Object(D.c)(t,e),t.prototype.request=function(e,t){return this.link.request(e,t)}}(T.ApolloLink);var A=r("vcXL"),q=r.n(A),L={possibleTypes:{WWS_WeddingWebsiteResult:["WWS_Error","WWS_WeddingWebsiteV2"],WWS_PageItem:["WWS_AccommodationItem","WWS_ActivityItem","WWS_BasicItem","WWS_CoverPhotoItem","WWS_EmbedItem","WWS_EventGroupItem","WWS_GifItem","WWS_GroupItem","WWS_HeadlineItem","WWS_LivestreamItem","WWS_ParagraphItem","WWS_PersonItem","WWS_PhotoGalleryItem","WWS_PhotoItem","WWS_PhotoTimelineItem","WWS_QuestionItem","WWS_StoryItem","WWS_TransportationItem","WWS_WeddingPartyItem"],WWS_SectionContent:["WWS_SectionItem","WWS_Story","WWS_Event","WWS_ContentItem","WWS_LocationContent","WWS_PhotoAlbum"]}},B=r("hNu0");function G(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function M(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?G(Object(r),!0).forEach((function(t){Object(n.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):G(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function Q(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function U(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?Q(Object(r),!0).forEach((function(t){Object(n.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):Q(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var F=null,H=function(e){var t=Boolean(e.ctx),r=e.apolloClient||V(e.apolloState||{},t?e.ctx:e);return r.toJSON=function(){return null},e.apolloClient=r,t&&(e.ctx.apolloClient=r),e},V=function(e,t){return F||(F=function(e,t){var r,n,o={"x-api-key":"HruNIapu80aDWFCWVo7c45quGz8kj8TM5xQXiczd"};if(null===t||void 0===t||null===(r=t.req)||void 0===r?void 0:r.headers){var c=t.req.headers,i=(c.host,Object(S.a)(c,["host"]));o=M(M({},o),i)}return new x.ApolloClient({ssrMode:Boolean(t),link:x.ApolloLink.from([(n=function(e,t){var r=t.headers,n=t.slug,o=t.sessionToken;return B.a.setContext({slug:n,headers:r}),M(M({},t),{},{headers:M(M({},r),{},{"x-wedding-identifier":encodeURIComponent(n),token:o})})},new T.ApolloLink((function(e,t){var r=Object(D.e)(e,[]);return new R.c((function(o){var c;return Promise.resolve(r).then((function(t){return n(t,e.getContext())})).then(e.setContext).then((function(){c=t(e).subscribe({next:o.next.bind(o),error:o.error.bind(o),complete:o.complete.bind(o)})})).catch(o.error.bind(o)),function(){c&&c.unsubscribe()}}))}))),N((function(e){var t=e.graphQLErrors,r=e.networkError;t&&t.forEach((function(e){e.extensions&&"PIN_REQUIRED"!==e.extensions.code&&B.a.notify(e,"GraphQLError",{context:{err:e}})})),r&&404!==r.statusCode&&B.a.notify(r,"NetworkError")})),new x.HttpLink({uri:"https://graphql.guests.theknot.com/public-graphql",fetch:q.a,headers:o})]),cache:new x.InMemoryCache({possibleTypes:L.possibleTypes}).restore(e)})}(e,t)),F};function X(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function J(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?X(Object(r),!0).forEach((function(t){Object(n.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):X(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}t.default=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.ssr,n=void 0===t||t;return function(e){var t=function(t){var r,n=t.apolloClient,c=t.apolloState,i=Object(S.a)(t,["apolloClient","apolloState"]);return r=n||V(c,void 0),Object(o.jsx)(x.ApolloProvider,{client:r,children:Object(o.jsx)(e,U({},i))})};return(n||e.getInitialProps)&&(t.getInitialProps=function(){var t=Object(_.a)(w.a.mark((function t(c){var i,a,u,s,l,p,f,b;return w.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(i=Boolean(c.ctx),a=H(c),u=a.apolloClient,s={},!e.getInitialProps){t.next=9;break}return t.next=6,e.getInitialProps(c);case 6:s=t.sent,t.next=13;break;case 9:if(!i){t.next=13;break}return t.next=12,k.a.getInitialProps(c);case 12:s=t.sent;case 13:t.next=32;break;case 17:if(!n||!l){t.next=32;break}return t.prev=18,t.next=21,Promise.all([r.e(1),r.e(13)]).then(r.bind(null,"ShjV"));case 21:return p=t.sent,f=p.getDataFromTree,b=i?U(U({},s),{},{apolloClient:u}):{pageProps:U(U({},s),{},{apolloClient:u})},t.next=26,f(Object(o.jsx)(l,U({},b)));case 26:t.next=31;break;case 28:t.prev=28,t.t0=t.catch(18),console.error("Error while running `getDataFromTree`",t.t0);case 31:C.a.rewind();case 32:return t.abrupt("return",U(U({},s),{},{apolloState:null===u||void 0===u?void 0:u.cache.extract(),apolloClient:c.apolloClient}));case 33:case"end":return t.stop()}}),t,null,[[18,28]])})));return function(e){return t.apply(this,arguments)}}()),t}}()((function(e){var t=e.Component,r=e.pageProps;return Object(o.jsx)(P,{honeybadger:B.a,children:Object(o.jsx)(o.Fragment,{children:Object(o.jsx)(t,J({},r))})})}))}},[[0,2,1,0,3,4]]]);
//# sourceMappingURL=_app-51e404d2a46892f63a7e.js.map