import{m as a,p as n,o as d,c as p,d as r,r as c}from"./app-D2imZtBY.js";const i={class:"flex flex-col space-y-2"},f=["type","value"],b={__name:"TextInput",props:{modelValue:String,type:String},emits:["update:modelValue"],setup(o,{expose:s}){const e=a(null);return n(()=>{e.value.hasAttribute("autofocus")&&e.value.focus()}),s({focus:()=>e.value.focus()}),(t,l)=>(d(),p("label",i,[r("div",null,[c(t.$slots,"inputLable")]),r("input",{type:o.type,ref_key:"input",ref:e,class:"border-bordercolor border focus:border-bordercolor focus:ring-0 py-4 px-4 pr-10 rounded-md shadow-sm",value:o.modelValue,onInput:l[0]||(l[0]=u=>t.$emit("update:modelValue",u.target.value))},null,40,f)]))}};export{b as _};
