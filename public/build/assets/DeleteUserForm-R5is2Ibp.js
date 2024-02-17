import{o as f,c as _,r as g,l as p,T as h,b as t,w as n,d as s,y as x,e as c,u as a,z as b,n as v}from"./app-DhHIL7E7.js";import{_ as k,a as $}from"./InputLabel-ClEQmpej.js";import{_ as C}from"./Modal-CQYiNRB8.js";import{_ as D}from"./SecondaryButton-dic39ERt.js";import{_ as V}from"./TextInput-DopcNJki.js";const B=["type"],m={__name:"DangerButton",props:{type:{type:String,default:"button"}},setup(d){return(o,r)=>(f(),_("button",{type:d.type,class:"inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"},[g(o.$slots,"default")],8,B))}},U={class:"space-y-6"},A=s("header",null,[s("h2",{class:"text-lg font-medium text-gray-900"},"Delete Account"),s("p",{class:"mt-1 text-sm text-gray-600"}," Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ")],-1),S={class:"p-6"},N=s("h2",{class:"text-lg font-medium text-gray-900"}," Are you sure you want to delete your account? ",-1),P=s("p",{class:"mt-1 text-sm text-gray-600"}," Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. ",-1),T={class:"mt-6"},j={class:"mt-6 flex justify-end"},M={__name:"DeleteUserForm",setup(d){const o=p(!1),r=p(null),e=h({password:""}),y=()=>{o.value=!0,x(()=>r.value.focus())},i=()=>{e.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>l(),onError:()=>r.value.focus(),onFinish:()=>e.reset()})},l=()=>{o.value=!1,e.reset()};return(z,u)=>(f(),_("section",U,[A,t(m,{onClick:y},{default:n(()=>[c("Delete Account")]),_:1}),t(C,{show:o.value,onClose:l},{default:n(()=>[s("div",S,[N,P,s("div",T,[t(k,{for:"password",value:"Password",class:"sr-only"}),t(V,{id:"password",ref_key:"passwordInput",ref:r,modelValue:a(e).password,"onUpdate:modelValue":u[0]||(u[0]=w=>a(e).password=w),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:b(i,["enter"])},null,8,["modelValue"]),t($,{message:a(e).errors.password,class:"mt-2"},null,8,["message"])]),s("div",j,[t(D,{onClick:l},{default:n(()=>[c(" Cancel ")]),_:1}),t(m,{class:v(["ms-3",{"opacity-25":a(e).processing}]),disabled:a(e).processing,onClick:i},{default:n(()=>[c(" Delete Account ")]),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}};export{M as default};
