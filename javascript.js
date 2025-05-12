//checkout click
var i=0;
function showHide(){
    if(i==0){
        document.getElementById('hide-show').style.display='flex';
        i=1;
    }else{
        document.getElementById('hide-show').style.display='none';
        i=0;
    }
}
const cart=[];
//products items(display)
const products=[
    {id:1, proName:"Coca Cola", price:"1,5$" ,img:"./assets/cocola.png"},
    {id:2, proName:"Lactasoy", price:"2,0$" ,img:"./assets/lactasoy.png"},
    {id:3, proName:"Bacchus", price:"1$" ,img:"./assets/bacchus.png"},
    {id:4, proName:"Carabao", price:"2,1$" ,img:"./assets/carabao.png"},
    {id:5, proName:"Fanta", price:"1.0$" ,img:"./assets/fanta.png"},
    {id:6, proName:"Pepsi", price:"1.2$" ,img:"./assets/pepsi.png"},
    {id:7, proName:"Wurkz", price:"0,9$" ,img:"./assets/wurkz.png"},
    {id:8, proName:"Yeo", price:"0.5$" ,img:"./assets/yeo.png"},
    {id:9, proName:"Ize", price:"0.9$" ,img:"./assets/ize.png"},
];
//display items
var txt="";
products.forEach((item,index)=>{
    txt+=`
        <div class="box">
            <img id="img" src="${item.img}" alt="">
            <p>${item.proName}</p>
            <p>${item.price}</p>
            <button type="button" id="add-cart" onclick='addCart(${JSON.stringify(item)})'>Add to Cart</button>
        </div>
    `;
    document.querySelector('.products').innerHTML=txt;
});

//add to cart
function addCart(product){
    // const product={id,proName,price,img};
    cart.push(product);
    readerCart();
}
function readerCart() {
    const checkout = document.querySelector('.ch-box');
    checkout.innerHTML = "";
    let total = 0;
    cart.forEach((item, index) => {
        let price = parseFloat(item.price.replace(',', '.').replace('$', ''));
        total += price;
        checkout.innerHTML += `
            <div id="reader-cart">
                <img src="${item.img}" alt="Error">
                <p>${item.proName}</p>
                <p>${item.price}</p>
                <button type="button" onclick="deleteCart(${index})">Delete</button>
            </div>
        `;
    });
    document.getElementById('total').innerText = total.toFixed(2) + '$';
}

function deleteCart(index) {
    cart.splice(index, 1);
    readerCart();
}
