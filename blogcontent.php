<?php 


$content_one = "React application တွေတည်ဆောက်တဲ့နေရာမှာ reusable component တွေဘယ်လိုသုံးရမလဲဆိုတာကြည့်လိုက်ရအောင်။



React ကိုအရင် import လုပ်ပြီး reusable button component ဖန်တီးပါမယ်။



const Button = ({ label, onClick }) => {

  return (\n

    <button onClick=\"{onClick}\">\n

      {label}\n

    </button>

  );

};



ပြီးရင် Main app component ကို define လုပ်မှာဖြစ်ပါတယ်။ 



\" <br> \"


function App() {

  return (

    <div>

      <Button label= \"Click Me \" onClick={() => alert('Button Clicked!')} />

      <Button label=\"Submit\" onClick={() => alert('Submitted!')} />

    </div>

  );

}


\" <br> \"
ပထမဆုံး button မှာ  label = “Click Me” ဆိုတာပါပြီး ဒုတိယမှာတော့ button ကိုနှိပ်လိုက်ရင် Button Clicked ဆိုပြီး pop up message လေးပြပေးမှာဖြစ်ပါတယ်။



ဒုတိယ Button မှာဆိုရင် Submit ဆိုတာလေးကိုနှိပ်လိုက်တဲ့အခါ Submitted ဆိုတဲ့ pop up message လေးပေါ်လာမှာဖြစ်ပါတယ်။



Button component ကိုပြန်သုံးလို့ရတာကတော့ props တွေဖြစ်တဲ့ label နဲ့ onclick ပေါ်မှာတည်ဆောက်ထားလို့ဖြစ်ပါတယ်။



Button တွေအများကြီး create လုပ်မယ့်အစားဒီတစ်ခုတည်းကိုပဲ ပြန်သုံးပြီး clean code တွေရေးလို့ရပါတယ်။ 



နောက်ဆုံးအဆင့်မှာတော့ App Component ကို export ပြန်လုပ်ရင်ရပါပြီ။



export default App;



ဒါဆိုရင် React နဲ့အတူ reusable ဖြစ်တဲ့ component တွေ create လုပ်လို့ရပြီပဲဖြစ်ပါတယ်။";

$content_two = "JavaScript ရဲ့ const Keyword ဟာ constant တွေ၊ value တွေ၊ function တွေ declare လုပ်တဲ့နေရာမှာ တော်တော်များများအသုံးပြုကြပါတယ်။

သူ့ရဲ့ value ဟာ set လုပ်ပြီးတာနဲ့ ပြန်ပြောင်းလို့မရပါဘူး။ 

Const Keyword ကို fix value တွေနဲ့အသုံးပြုပြီး let ကိုတော့ value ကပြောင်းလဲဖို့ရှိရင်အသုံးပြုပါတယ်။ 

const MAX_USERS = 100;

const API_KEY = \"12345-abcdef \";

ဒီ code လေးမှာဆိုရင် keyword နှစ်ခုက program တခုလုံးမပြောင်းဘဲ ရှိနေတော့မှာဖြစ်ပါတယ်။

သူ့ရဲ့ထူးခြားချက်က object တွေ၊ array တွေကိုလည်း declare လုပ်လို့ရတာပဲဖြစ်ပါတယ်။ 

ကဲ.. const Keyword နဲ့ပတ်သက်တဲ့အကြောင်းကိုသိသွားပြီဆိုရင်တော့ နောက်အပတ်တွေမှာ ဘယ်လို quiz တွေလာမလဲစောင့်ကြည့်ပေးကြပါဦးနော်။";


$content_three = "Cross-platform တည်ဆောက်နိင်တဲ့ tool kit တစ်ခုဖြစ်တဲ့ 

 flutter က Mobile Development ဘက်မှာ popular ဖြစ်တဲ့ language တစ်ခုပဲဖြစ်ပါတယ်။



Flutter ကိုအခမဲ့ လေ့လာနိုင်တဲ့ resource တွေကို ကြည့်လိုက်ရအောင် 👀



Flutter နဲ့ပတ်သက်ပြီး အခြေခံကစ အတွင်းကျကျ သင်ယူနိုင်မယ့် YouTube channel တွေကတော့ 



👉  https://www.youtube.com/@flutterdev



👉https://www.youtube.com/@flutterdev



စာအုပ်တွေအနေနဲ့ကတော့ အခမဲ့ မဟုတ်ပေမယ့် အခြေခံကို နားလည်သဘောပေါက်သွားစေမယ့် စာအုပ်တွေအနေနဲ့ 



Mike Rydstorm ရဲ့ “Flutter in Action” စာအုပ်နဲ့ Ray Wenderlich ရဲ့ Flutter Apprentice စာအုပ်တွေကအကောင်းဆုံးပါပဲ။



Flutter လေ့လာနေတဲ့သူငယ်ချင်းတွေသိသွားအောင်လည်း ဒီ post လေးကို share ပေးသွားဖို့ မမေ့နဲ့နော် ";



$content_four = "အရင်အပတ်က OOP နဲ့ပတ်သက်ပြီး Quiz လေးတင်တာမှတ်မိကြလား‌ဗျို့ 👀



အဖြေမှန်ကို ဒီ post လေးမှာ ပြောပြပေးသွားမှာဖြစ်ပါတယ်။



Polymorphism ဆိုတာ Object-oriented Programming ရဲ့ fundamental concept တစ်ခုပဲဖြစ်ပါတယ်။ 



Code maintainability နဲ့ reusability အတွက် အသုံး၀င်တဲ့ concept တစ်ခုဆိုရင်လည်းမမှားပါဘူး။



Method overriding နဲ့ Method overloading ဆိုပြီး Polymorphism ရဲ့ type (၂) မျိုးရှိပြီး အသုံး၀င်ပုံလည်းကွာခြားပါတယ်။



Method Overriding က python မှာတွေ့ရတဲ့ common polymorphism type တစ်မျိုးပဲဖြစ်ပါတယ်။



Method overloading ကိုတော့ python မှာ အတွေ့နည်းပေမယ့် အခြား language တွေမှာတွေ့ရတာများပါတယ်။



Polymorphism ကိုအသုံးပြုခြင်းဖြင့် flexible နဲ့ reusable ဖြစ်တဲ့ code တွေရေးသားလာနိုင်မှာပဲဖြစ်ပါတယ်။



နောက်အပတ်တွေမှာ ဘယ်လိုစိတ်၀င်စားဖို့ကောင်းတဲ့ quiz တွေလာဦးမလဲဆိုတာစောင့်ကြည့်ဖို့ မမေ့ကြပါနဲ့နော်";
$content_five = "Interview ဖြေဖို့ပြင်ဆင်နေတဲ့ Developer ကြီးတွေရှိပါသလား 👀



ဒီနေ့မှာတော့ Interview အတွက် သိထားသင့်တဲ့ Tips & Tricks တွေကို မျှဝေပေးသွားမှာဖြစ်ပါတယ်။



Interview မဖြေခင်မှာ 

\" <br> \"

👉 ကိုယ်အလုပ်လျှောက်ထားတဲ့ company အကြောင်းကို သေချာ research လုပ်ထားပါ။
\" <br> \"
👉 Interview မှာမေးလာနိုင်တဲ့ ကိုယ့်ရဲ့အတွေ့အကြုံတွေ၊ project တွေ၊ technical knowledge နဲ့ပတ်သက်တဲ့ မေးခွန်းတွေကို သေချာပြင်ဆင်ထားပါ။
\" <br> \"
👉 လျှောက်ထားတဲ့ job position နဲ့ပတ်သက်ပြီး လိုအပ်တဲ့ expectations တွေ requirements တွေကိုနားလည်အောင်ဖတ်ပါ။


\" <br> \"
Interview အတွင်းမှာတော့ 
\" <br> \"
👉 ကိုယ့်ရဲ့ယုံကြည်ချက်ရှိတဲ့ပုံစံနဲ့ passionate ဖြစ်တဲ့ပုံစံကို ပြသပါ။
\" <br> \"
👉 မေးခွန်းတွေဖြေတဲ့အခါမှာ Situation, Task, Action, Result စတဲ့ STAR method ကိုသုံးပြီး ပြန်ဖြေခဲ့ပါ။
\" <br> \"
👉 Coding Test တွေပေးတဲ့နေရာမှာလည်း efficient ဖြစ်ပြီး နားလည်လွယ်တဲ့ code တွေကိုရေးပါ။ ဘက်ပေါင်းစုံကနေစဉ်းစားပြီး အဖြစ်နိုင်ဆုံးအဖြေကို ဖြေဆိုခဲ့လို့ရပါတယ်။ 
\" <br> \"
👉 ကိုယ်တတ်ကျွမ်းထားတဲ့ skill တွေကို ရိုးရိုးသားသားချပြပါ။
\" <br> \"
👉 Company နဲ့ပတ်သက်ပြီး ကိုယ်သိချင်တာတွေကိုလည်း ပြန်မေးဖို့ မမေ့ပါနဲ့။



Coding Test တွေနဲ့ပတ်သက်ပြီး interview မသွားခင် ကြိုလေ့ကျင့်ထားတာမျိုး၊ Developer group တွေမှာ သိချင်တာမျိုးတွေမေးထားလို့ရပါတယ်။



Creative Coder page မှာလည်း Interview နဲ့ပတ်သက်ပြီးမေးမြန်းလို့ရပါတယ်။



Interview pass ကြပါစေလို့လည်း ဆုတောင်းပေးလိုက်ရပါတယ်။";