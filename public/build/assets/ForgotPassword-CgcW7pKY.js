import{G as b}from"./GuestLayout-BQA_hHvR.js";import{a as w,_ as g}from"./InputLabel-BUNCO63j.js";import{_ as h}from"./PrimaryButton-DvJsAmQ-.js";import{_ as v}from"./TextInput-CVjWI23h.js";import{T as L,Z as k,i as V,r as e,o as u,a as E,w as a,b as s,c as P,t as B,g as I,d as t,e as m,n as N,f as T}from"./app-Di7dlWlR.js";import{_ as j}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ApplicationLogo-DX5r4maF.js";const C={data(){return{form:L({email:""})}},props:["status"],components:{GuestLayout:b,InputError:w,InputLabel:g,PrimaryButton:h,TextInput:v,Head:k,Link:V},methods:{submit(){form.post(route("password.email"))}}},G={key:0,class:"mb-4 font-medium text-sm text-green-600"},F={class:"mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start"},H=t("div",{class:"text-center"},[t("h3",{class:"text-lg font-bold text-gray-900"}," Forgot your password? ")],-1),S=t("div",null," Enter your email address or phone number below and we'll send you an OTP. ",-1),$={class:"mt-4 w-full flex justify-star text-left"},O={class:"mt-4"},z={class:"flex justify-start space-x-1 mt-4"};function D(r,o,i,M,c,l){const d=e("Head"),_=e("text-input"),f=e("InputError"),p=e("primary-button"),x=e("Link"),y=e("GuestLayout");return u(),E(y,null,{default:a(()=>[s(d,{title:"Forgot Password"}),i.status?(u(),P("div",G,B(i.status),1)):I("",!0),t("form",{class:"flex py-10 justify-center items-center",onSubmit:o[1]||(o[1]=T((...n)=>l.submit&&l.submit(...n),["prevent"]))},[t("div",F,[H,S,t("div",$,[s(_,{modelValue:r.email,"onUpdate:modelValue":o[0]||(o[0]=n=>r.email=n),class:"w-full"},{inputLable:a(()=>[m(" Email/Phone Number ")]),_:1},8,["modelValue"]),s(f,{class:"mt-2",message:c.form.errors.email},null,8,["message"])]),t("div",O,[s(p,{class:N("bg-black flex justify-center text-white w-full text-center")},{default:a(()=>[m("Send OTP")]),_:1})]),t("div",z,[s(x,{class:"cursor-pointer",href:r.route("login")},{default:a(()=>[m(" Login")]),_:1},8,["href"])])])],32)]),_:1})}const R=j(C,[["render",D]]);export{R as default};
