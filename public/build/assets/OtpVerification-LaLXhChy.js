import{G as y}from"./GuestLayout-D0B62aez.js";import{a as b,_ as v}from"./InputLabel-Biutd4aS.js";import{_ as g}from"./PrimaryButton-D5D5tL13.js";import{_ as V}from"./TextInput-CaqlwZnw.js";import{T as k,Z as w,i as L,r as e,o as m,a as I,w as n,b as s,c as C,t as B,g as E,d as t,e as r,n as j,f as G}from"./app-XygvXukt.js";import{_ as N}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ApplicationLogo-BDCd_CNu.js";const D={props:["status","userID"],data(){return{form:k({otp:"",user_id:this.userID})}},components:{GuestLayout:y,InputError:b,InputLabel:v,PrimaryButton:g,TextInput:V,Head:w,Link:L},methods:{submit(){this.form.post(route("vcode.login"))}}},H={key:0,class:"mb-4 font-medium text-sm text-green-600"},T={class:"mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start"},P=t("div",{class:"text-center py-10"},[t("h3",{class:"text-2xl font-bold text-gray-900"},[t("span",null," Verification code sent"),r(),t("i",{class:"fa-light text-green-600 fa-envelope-circle-check"})])],-1),S=t("div",null," A verification code has been sent to your mobile phone! Please enter the code below to verify account. ",-1),z={class:"mt-4 w-full flex justify-star text-left"},A={class:"mt-4"},M={class:"flex justify-start space-x-1 mt-4"};function O(u,o,c,U,a,l){const f=e("Head"),_=e("text-input"),p=e("InputError"),d=e("primary-button"),x=e("Link"),h=e("GuestLayout");return m(),I(h,null,{default:n(()=>[s(f,{title:"Verification Code"}),c.status?(m(),C("div",H,B(c.status),1)):E("",!0),t("form",{class:"flex py-10 justify-center items-center",onSubmit:o[1]||(o[1]=G((...i)=>l.submit&&l.submit(...i),["prevent"]))},[t("div",T,[P,S,t("div",z,[s(_,{modelValue:a.form.otp,"onUpdate:modelValue":o[0]||(o[0]=i=>a.form.otp=i),class:"w-full"},{inputLable:n(()=>[r(" Enter verification code")]),_:1},8,["modelValue"])]),s(p,{class:"mt-2",message:a.form.errors.otp},null,8,["message"]),t("div",A,[s(d,{class:j("bg-black flex justify-center text-white w-full text-center")},{default:n(()=>[r("Confirm")]),_:1})]),t("div",M,[s(x,{class:"cursor-pointer",href:u.route("login")},{default:n(()=>[r(" Login")]),_:1},8,["href"])])])],32)]),_:1})}const R=N(D,[["render",O]]);export{R as default};