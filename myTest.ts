import { ClientFunction, Selector } from "testcafe";

fixture`Getting Started`.page`localhost/fk-it/CHOCOLATADA/index.php`; //basta colocar seu diretorio

function getRandomValue() {
  return Math.floor(10000* Math.random() + 10);
}

function chooseDivByName(name){
  var index:boolean = false;

  


  
  
  while(!index){
    
  }
}

var RandomRange = (min:number, max:number) => Math.floor(Math.random()*(max-min))+min ;

//Randonizer Functions 
var randomValue = getRandomValue();
var randomUser = `Xpto${randomValue}`;
var randomPass = `Test123@${randomValue}`;
var randomCell:number = RandomRange(111111111,999999999);

//usar isso pra ver se ta na pagina esperada
const getLocation:Function = ClientFunction(() => document.location.href);
const fieldDivName:Function = (userName:string) => Selector(`Div#${userName}`).child(0).child(0).child(5).child(0).child("a");

test("Registrar usuário", async (t) => {
  await t
    .setNativeDialogHandler(() => true) //isso aqui é pra dar 'OK' em todos os alerts que aparecerem nesse test(Registrar usuario xpto)

    //REGISTRAR 1
    .click(Selector("a").withText("LOGIN"))
    .click(Selector("a").withText("Sign Up"))
    .typeText("input[name=name]", randomUser)
    .typeText("input[name=email]", `${randomUser}@xpto.com`)
    .typeText("input[name=telemovel]", randomCell.toString())
    .typeText("input[name=username]", `Bruh ${randomUser}`)
    .typeText("input[name=pass1]", randomPass)  
    .typeText("input[name=pass2]", randomPass)  
    .click(Selector("button").withText("Registrar"))

    .expect(getLocation()).contains("index.php");
});

test("Logar sem permissao", async (t) => {
  await t
    .setNativeDialogHandler(() => true)

    .click(Selector("a").withText("LOGIN"))
    .typeText("input[name=email]", randomUser)
    .typeText("input[name=password]", randomPass)
    .click(Selector("button").withText("Login"))

    .expect(getLocation()).contains("login.php");

});

test("ativar conta", async (t) => {
  await t
    .setNativeDialogHandler(() => true)

    .click(Selector("a").withText("LOGIN"))
    .typeText("input[name=email]", "admin")
    .typeText("input[name=password]", "admin")
    .click(Selector("button").withText("Login"))
    .expect(getLocation()).contains("index.php")
    .click(Selector("a").withText("DADOS"))
    .click(Selector("a").withText("Ver Somente Novos"))

    .click(fieldDivName(randomUser))
    .expect(getLocation()).contains("dados.php");

    


    ;
});

test("Logar na conta", async (t) => {
  await t
  
    .setNativeDialogHandler(() => true)

    .click(Selector("a").withText("LOGIN"))
    .click(Selector("a").withText("Logar"))
    .typeText("input[name=username]", randomUser)
    .typeText("input[name=password]", randomPass)
    .click(Selector("#submit"))
    .click(Selector("button").withText("OK"))
    .expect(getLocation()).contains("indexUSER.php");
});

test("desativar conta ", async (t) => {
  await t
  .setNativeDialogHandler(() => true)

  .click(Selector("a").withText("LOGIN"))
    .typeText("input[name=username]", "admin")
    .typeText("input[name=password]", "admin")
    .click(Selector("button").withText("Login"))
    .expect(getLocation()).contains("index.php")
    .click(Selector("a").withText("DADOS"))
    
  ;
    
});

test("Reativar User", async (t) => {
  await t
  .setNativeDialogHandler(() => true)

  .click(Selector("#filterheader"))
  .click(Selector("a").withText("Admin"))
  .expect(getLocation()).contains("loginADM.php")
  .typeText("input[name=username]","admin")
  .typeText("input[name=password]","admin")
  .click(Selector("#submit"))
  .click(Selector("a").withText("Usuarios"))
  .expect(getLocation()).contains("verUsers.php")
  .typeText("input[name=id]", randomUser)
  .click(Selector("#bruh"))
  .click(Selector("a").withText("ativar"))
  .expect(getLocation()).contains("indexADM.php")
  .click(Selector("a").withText("Logout"))
  .expect(getLocation()).contains("index.php");
});