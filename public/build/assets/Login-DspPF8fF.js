import{G as w}from"./GuestLayout-BQA_hHvR.js";import{a as v,_ as g}from"./InputLabel-BUNCO63j.js";import{_ as k}from"./PrimaryButton-DvJsAmQ-.js";import{_ as L}from"./TextInput-CVjWI23h.js";import{h as C,j as V,v as B,o as h,c as I,i as T,Z as j,T as f,r as o,a as E,w as c,b as r,d as e,f as $,e as i,n as G}from"./app-Di7dlWlR.js";import{_ as N}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ApplicationLogo-DX5r4maF.js";const F=["value"],H={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{type:String,default:null}},emits:["update:checked"],setup(n,{emit:t}){const p=t,d=n,s=C({get(){return d.checked},set(a){p("update:checked",a)}});return(a,l)=>V((h(),I("input",{"onUpdate:modelValue":l[0]||(l[0]=u=>s.value=u),type:"checkbox",value:n.value,class:"rounded border-gray-300 text-black shadow-sm focus:ring-white"},null,8,F)),[[B,s.value]])}},P={components:{GuestLayout:w,InputError:v,InputLabel:g,PrimaryButton:k,TextInput:L,Link:T,Head:j,Checkbox:H,useForm:f},data(){return{inputType:"password",signUp:!1,form:f({phone_number:""})}},methods:{submit(){this.form.post(route("otp.generate"),{onFinish:()=>this.form.reset("password")})},showPassword(){this.inputType=this.inputType=="password"?"text":"password"}}},S={class:"flex w-full py-20 justify-center items-center"},U={class:"mt-3 w-full sm:mt-0 sm:ms-4 sm:text-start"},D=e("div",{class:"text-center"},[e("h3",{class:"text-lg font-bold text-gray-900"},[i(" Log "),e("span",{class:"text-primarycolor"},"In")])],-1),M={class:"mt-4 w-full"},q={class:"mt-10"},z={class:"flex justify-center font-bold space-x-1 mt-4"},A=e("span",null,"Forgot your",-1),R={class:"flex justify-center space-x-2 mt-4"},Z=e("span",null,"Don't have an account yet?",-1);function J(n,t,p,d,s,a){const l=o("Head"),u=o("text-input"),x=o("InputError"),b=o("primary-button"),_=o("Link"),y=o("GuestLayout");return h(),E(y,null,{default:c(()=>[r(l,{title:"Register"}),e("div",S,[e("div",U,[D,e("form",{onSubmit:t[1]||(t[1]=$((...m)=>a.submit&&a.submit(...m),["prevent"]))},[e("div",M,[r(u,{modelValue:s.form.phone_number,"onUpdate:modelValue":t[0]||(t[0]=m=>s.form.phone_number=m),class:"w-full"},{inputLable:c(()=>[i(" Email / Phone Number ")]),_:1},8,["modelValue"]),r(x,{class:"mt-2",message:s.form.errors.phone_number},null,8,["message"])]),e("div",q,[r(b,{class:G("bg-black flex justify-center text-white w-full text-center")},{default:c(()=>[i("Login")]),_:1})])],32),e("div",z,[A,r(_,{class:"text-primarycolor cursor-pointer",href:n.route("password.request")},{default:c(()=>[i(" password? ")]),_:1},8,["href"])]),e("div",R,[Z,r(_,{href:n.route("register"),class:"cursor-pointer font-bold"},{default:c(()=>[i(" Sign up")]),_:1},8,["href"])])])])]),_:1})}const te=N(P,[["render",J]]);export{te as default};
