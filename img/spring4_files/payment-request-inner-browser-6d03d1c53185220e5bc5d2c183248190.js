webpackJsonp([11],{8:function(e,t,n){n("hC4F"),e.exports=n("P7YZ")},P7YZ:function(e,t,n){"use strict";function r(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}function o(e,t){var n={};for(var r in e)t.indexOf(r)>=0||Object.prototype.hasOwnProperty.call(e,r)&&(n[r]=e[r]);return n}Object.defineProperty(t,"__esModule",{value:!0});var a=n("iC45"),i=n("11CF"),s=n("kSHn"),u=n("Hu9M"),l=n("x38n"),p=n("afZ+"),c=n("3z7h"),d=n("w+Lg"),h=n("Bilh"),m=n("+Sgq"),y=n("kU+X"),f=function(){if(!window.PaymentRequest)return null;if(/CriOS\/59/.test(navigator.userAgent))return null;if(/.*\(.*; wv\).*Chrome\/(?:53|54)\.\d.*/g.test(navigator.userAgent))return null;if(y.k)return null;var e=window.PaymentRequest;return e.prototype.canMakePayment||(e.prototype.canMakePayment=function(){return s.a.resolve(!1)}),e}(),_=n("wV6Z"),g=n("B4vs"),v=n("oTrx"),b=n("ZBjb"),O=n("YU9a"),w=n("NEHP"),q=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},P=function(e,t){var n=e.amount,r=e.label,o=e.pending,a=t.currency;return{amount:{value:Object(_.a)(n,a),currency:a.toUpperCase()},label:r,pending:!!o}},k=function(e,t){var n=e.amount,r=e.label,o=e.detail,a=e.id,i=t.currency;return{amount:{value:Object(_.a)(n,i),currency:i.toUpperCase()},label:o?r+" — "+o:r,id:a}},R=function(e){return function(t){return t[e]||null}},E={total:function(e){return P(e.total,e)},displayItems:function(e){return e.displayItems?e.displayItems.map(function(t){return P(t,e)}):[]},shippingOptions:function(e,t){var n=e.shippingOptions;if(!n)return[];var r=Object(v.b)(n,function(e){return!!t&&e.id===t.shippingOption}),o=r||n[0];return n.map(function(t){var n=k(t,e);return o===t?q({},n,{selected:!0}):q({},n,{selected:!1})})}},j={requestPayerEmail:R("requestPayerEmail"),requestPayerName:R("requestPayerName"),requestPayerPhone:R("requestPayerPhone"),requestShipping:R("requestShipping"),shippingType:R("shippingType")},A=q({},E,{error:function(e){return"success"===e.status?void 0:Object(b.a)("auto","errors.payment_request.invalid_shipping_address")}}),C={status:function(e){return"success"===e.status?"success":"fail"}},N=function(e){return function(t,n){var r={};return Object.keys(e).forEach(function(o){var a=e[o],i=a(t,n);null!==i&&(r[o]=i)}),r}},S=N(E),M=N(j),T=N(C),I=function(e,t){var n=N(A)(e,t),r=n.error,a=n.shippingOptions,i=o(n,["error","shippingOptions"]);return r?q({error:r},i):q({shippingOptions:a},i)},B=function(e,t){var n=e.apiKey,o=e.accountId,a=o?n+"/"+o:n,i=Object(g.b)(a)===g.a.test?{environment:"TEST"}:{},s=t.country,u=t.jcbEnabled,l=t.__skipGooglePayInPaymentRequest,p=Object(w.b)(s,u||!1),c=[{supportedMethods:["basic-card"],data:q({},i,{supportedNetworks:p})}];if(!l){var d=Object(w.a)(s,u||!1);c=[].concat(r(c),[{supportedMethods:["https://google.com/pay"],data:q({},i,{merchantId:"09511744644598700896",apiVersion:1,allowedPaymentMethods:["CARD","TOKENIZED_CARD"],cardRequirements:{allowedCardNetworks:d,billingAddressRequired:!0,billingAddressFormat:"FULL"},paymentMethodTokenizationParameters:{tokenizationType:"PAYMENT_GATEWAY",parameters:{gateway:"stripe","stripe:publishableKey":a,"stripe:version":"Stripe.js/PayWithGoogle"}}})},{supportedMethods:["https://android.com/pay"],data:q({},i,{merchantId:"09511744644598700896",allowedCardNetworks:d,billingAddressRequired:!0,billingAddressFormat:"FULL",paymentMethodTokenizationParameters:{tokenizationType:"GATEWAY_TOKEN",parameters:{gateway:"stripe","stripe:publishableKey":a,"stripe:version":"Stripe.js/AndroidPay"}}})}])}return y.c&&(c=[].concat(r(c),[{supportedMethods:["ms-merchant-info"],data:{displayOrigin:document.referrer}}])),c},L=function(e,t,n){var r=q({},O.c,t);return{methods:B(e,r),details:S(r,n),options:M(r,n)}},x=L,z="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},F=function(e){if(e&&"object"===(void 0===e?"undefined":z(e))&&Array.isArray(e.addressLine)){return{address_line1:e.addressLine[0],address_line2:e.addressLine.slice(1).join(", "),address_city:e.city,address_zip:e.postalCode,address_state:e.region,address_country:e.country}}return{}},Y=function(e){return{addressLine:e.addressLine,city:e.city||"",country:e.country||"",dependentLocality:e.dependentLocality||"",organization:e.organization||"",phone:e.phone||"",postalCode:e.postalCode||"",recipient:e.recipient||"",region:e.region||"",sortingCode:e.sortingCode||""}},K=function(e,t){return{shippingOption:t.shippingOptions?t.shippingOptions.filter(function(t){return t.id===e.shippingOption})[0]||null:null,shippingAddress:e.shippingAddress?Y(e.shippingAddress):null,payerEmail:e.payerEmail||null,payerPhone:e.payerPhone||null,payerName:e.payerName||null,methodName:e.methodName}},U=function(e,t){return{shippingOption:e.shippingOption&&t.shippingOptions?t.shippingOptions.filter(function(t){return t.id===e.shippingOption})[0]||null:null,shippingAddress:e.shippingAddress||null}},Z=K,W=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},G=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),D=Object(a.u)({authentication:Object(a.u)({apiKey:a.w,accountId:Object(a.s)(a.w)}),mids:Object(a.s)(c.a),controllerId:a.w,origin:Object(a.s)(a.w),referrer:Object(a.s)(a.w)}),H=function(){function e(e){var t=this;J.call(this);var n=Object(a.C)(D,Object(i.a)(e),"Payment Request API"),r=n.value,o=n.warnings,s=r.controllerId,u=r.authentication,l=r.mids;this._authentication=u,this._mids=l||null,this._controller=new h.a(s),this._isShowing=!1,this._usesButtonElement=null,o.forEach(function(e){return t._controller.warn(e)}),this._controller._events.initialize.on(function(e){var n=W({},O.c,e,{status:O.a.success});t._setupPaymentRequest(n)}),this._controller.frameActionEvents.checkCanMakePayment.on(function(e){var n=e.complete;if(t._pr){var r=function(e){t._report("pr.browser.can_make_payment_response",{available:e}),t._legacyReport("payreq.can_make_payment_native_response",{available:e}),n({available:e})},o=function(e){t._controller.warn("We were rate-limited from checking if your requested Payment Request options are allowed. Please test again before going live."),t._report("error.pr.browser.can_make_payment_rate_limited",{error:e}),t._legacyReport("error.payreq.can_make_payment_rate_limited",{message:e.message}),n({available:!0})};t._pr.hasEnrolledInstrument?t._pr.hasEnrolledInstrument().then(r).catch(o):t._pr.canMakePayment().then(r).catch(o)}else n({available:!1})}),this._controller.event("load")}return G(e,[{key:"_setupPaymentRequest",value:function(e){var t=this;this._pr=null,this._isShowing&&(this._controller.event("pr-close"),this._isShowing=!1),this._controller._events.abort.off(),this._controller._events.show.off(),this._controller._events.update.off(),this._paymentRequestOptions=e;var n=x(this._authentication,this._paymentRequestOptions,null),r=n.details,o=n.options,a=n.methods;if(f)try{this._pr=new f(a,r,o)}catch(e){}var i=void 0;if(!this._pr)return void this._legacyReport("payreq.no_pr_object");i=this._pr,["shippingaddresschange","shippingoptionchange"].forEach(function(e){i.addEventListener(e,t._handleEvent(i,e))});var s=function(){return i.abort()},p=function(e){if(t._usesButtonElement=e.usesButtonElement,t._isShowing)throw new l.a("Already called show() once.");t._isShowing=!0,i.show().then(t._handlePayment(i)).then(u.b,t._handleCancel(i)).then(function(){t._setupPaymentRequest(t._paymentRequestOptions)}).catch(function(e){t._legacyReport("fatal.payreq.unexpected_error",{error:e.message})})},c=function(e){if(t._isShowing)throw new l.a("You cannot update Payment Request options while the payment sheet is showing.");var n=W({},t._paymentRequestOptions,e);t._setupPaymentRequest(n)};this._controller._events.abort.on(s),this._controller._events.show.on(p),this._controller._events.update.on(c)}}]),e}(),J=function(){var e=this;this._report=function(t,n){e._controller.report(t,W({},n,{backingLibrary:"BROWSER",usesButtonElement:e._usesButtonElement}))},this._legacyReport=function(t,n){e._controller.report(t,W({},n,null!==e._usesButtonElement?{usesButtonElement:e._usesButtonElement}:{},{impl:"prapi"}))},this._handleEvent=function(t,n){return function(r){r.updateWith(e._controller.waitForCallback(n,U(t,e._paymentRequestOptions)).then(function(r){var o=Object(a.C)(m.a,r,n+" callback"),i=o.value;return o.warnings.forEach(function(t){return e._controller.warn(t)}),e._paymentRequestOptions=W({},e._paymentRequestOptions,i),I(e._paymentRequestOptions,t)}))}},this._handleCancel=function(){return function(t){e._controller.event("pr-cancel"),e._legacyReport("payreq.show_rejected",{error:t.message})}},this._handlePayment=function(t){return function(n){e._legacyReport("payreq.paymentauthorized",{method:n.methodName});var r=void 0;if("basic-card"===n.methodName){var o=n.details,i=o.cardNumber,s=o.cardSecurityCode,u=o.cardholderName,l=o.expiryMonth,c=o.expiryYear;r=e._controller.unsafeAction(d.d.TOKENIZE,W({},F(o.billingAddress),{type:"card",name:u,email:n.payerEmail||void 0,card:{number:i,cvc:s,exp_year:c,exp_month:l},elementName:e._usesButtonElement?p.a.paymentRequestButton:void 0,mids:e._mids})).then(function(t){if("object"===t.type){var r=t.object;return e._controller.waitForCallback("token",W({},Z(n,e._paymentRequestOptions),{token:r}))}return e._controller.event("pr-error",{error:t.error}),{status:"fail"}})}else if("https://google.com/pay"===n.methodName)r=e._controller.waitForCallback("token",W({},Z(n,e._paymentRequestOptions),{token:JSON.parse(n.details.paymentMethodToken.token)}));else{if("https://android.com/pay"!==n.methodName)throw e._legacyReport("fatal.payreq.unexpected_payment_method",{method:n.methodName}),new Error("Unexpected PaymentRequest payment method: "+n.methodName);r=e._controller.waitForCallback("token",W({},Z(n,e._paymentRequestOptions),{token:JSON.parse(n.details.paymentMethodToken)}))}return r.then(function(r){var o=Object(a.C)(m.a,r,"complete callback"),i=o.value;o.warnings.forEach(function(t){return e._controller.warn(t)}),e._paymentRequestOptions=W({},e._paymentRequestOptions,i);var s=T(e._paymentRequestOptions,t);n.complete(s.status)})}}},V=H;!function(){var e=window.location.hash.substring(1).split("?")[0];new V(e)}()}},[8]);