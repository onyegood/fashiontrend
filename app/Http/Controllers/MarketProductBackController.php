<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Session;
use App\Product;
use App\Brand;
use App\Category;
//User request allows you write api's
use Response;


use Auth;

class MarketProductBackController extends Controller
{

//New product form
    public function getAddNewProduct(){

        $user = Auth::user();
        $brd = Brand::all();
        $cat = Category::all();

        return view('admin.addnewproduct')->with([
            'user', $user,
            'brd' => $brd,
            'cat' => $cat
        ]);
    }

 //Insert product into the database
    public function postCreateProduct(Request $data)
    {

        $validator = Validator::make($data->all(), [
            'productName' => 'required',
            'description' => 'required',
            'price' => 'required',
            'oldPrice' => 'required',
            'colorName' => 'required',
            'size' => 'required',
            'status' => 'required',
            'quantity' => 'required',
            'tag' => 'required',
            'categoryName' => 'required',
            'brandName' => 'required',
            'img1' => 'mimes:jpg,jpeg,png|Max:100|required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('allproducts')
                ->withErrors($validator)
                ->withInput();
        }

        // Image upload

            /*
            $imgOne = $data->file('img1');
            $filename = time() . '.' . $imgOne->getClientOriginalExtension();
            Image::make($imgOne)->resize(300, 300)->save(public_path('/uploads/products-images/' . $filename));
            */

            $user = Auth::user();

            $pro = new Product();

            $pro->user_id = $user->id;
            $pro->productName = $data['productName'];
            $pro->description = $data['description'];
            $pro->price = $data['price'];
            $pro->oldPrice = $data['oldPrice'];
            $pro->colorName = $data['colorName'];
            $pro->size = $data['size'];
            $pro->status = $data['status'];
            $pro->quantity = $data['quantity'];
            $pro->tag = $data['tag'];
            $pro->categoryName = $data['categoryName'];
            $pro->brandName = $data['brandName'];

            for($i=0; $i<=5;  $i++) {
                $name = "img". $i;
                if($data->hasfile($name)) {
                    //$pro->$name = $data->file($name)->move(public_path('\uploads\products', $_FILES[$name]['name']));
                    $pro->$name = $data->file($name)->move('uploads/products', $_FILES[$name]['name']);
                }
            }

        //dd($pro);

            $pro->save();

            //store status message
            Session::flash('msg', 'Product added successfully!');

            return redirect()->route('allproducts');


    }

//View all products
    public function getAllProducts(){
        $user = Auth::user();
        $prod = Product::all();

        //This is used to return data as a Json object
        //Sample api to return all products as json object
        //return Response::Json($prod,202);

        return view('admin.allproducts')->with([
            'user' => $user,
            'prod' => $prod,
        ]);
    }

//View single product
    public function getProductById($id){

        $user = Auth::user();

        $prd = Product::findOrFail($id);

        return view('admin.productdetail')->with([
            'user'=> $user,
            'prd' => $prd,
        ]);

    }

//Get item into edit form view
    public function getEditProduct($id){

        $user = Auth::user();
        $cat = Category::all();
        $brd = Brand::all();
        $prd = Product::findOrFail($id);

        return view('admin.editproduct')->with([
            'user'=> $user,
            'prd' => $prd,
            'cat' => $cat,
            'brd' => $brd
        ]);
    }

//Update product

    public function postEditProduct(Request $data, $id){
        //validate post data
        $this->validate($data, [
            'productName'   => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'oldPrice'      => 'required',
            'colorName'     => 'required',
            'size'          => 'required',
            'status'        => 'required',
            'quantity'      => 'required',
            'tag'           => 'required',
            'categoryName'  => 'required',
            'brandName'     => 'required',
        ]);

        //get post data
        $editProductData = $data->all();
        //update post data
        Product::find($id)->update($editProductData);

        //store status message
        Session::flash('msg', 'Product updated successfully!');

        return redirect()->route('allproducts');


    }

    public function gettDeletProduct($id){
        //update Product data
        Product::find($id)->delete();

        //store status message
        Session::flash('msg', 'Product deleted successfully!');

        return redirect()->route('allproducts');
    }


//Get all order
    public function getProductOrder(){
        $user = Auth::user();

        return view('admin.orderlist')->with([
            'user'=>$user,
        ]);
    }

//Add category and brand

    public function getAddCatAndBrand(){
        $user = Auth::user();
        $cat = Category::all();
        $brd = Brand::all();
        $i =1;

        return view('admin.categoryandbrand')->with([
            'user'=>$user,
            'cat'=>$cat,
            'brd'=>$brd,
            'i' => $i,
        ]);
    }

    public function postCategory(Request $data){

        $validator = Validator::make($data->all(), [
            'categoryName' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('categoryandbrand')
                ->withErrors($validator)
                ->withInput();
        }

        $cat = new Category();

        $cat->categoryName = $data['categoryName'];

        $cat->save();

        //add category message
        Session::flash('msg', 'Category added successfully!');

        return redirect()->route('categoryandbrand');

    }

    public function postBrand(Request $data){

        $validator = Validator::make($data->all(), [
            'brandName' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('categoryandbrand')
                ->withErrors($validator)
                ->withInput();
        }

        $brd = new Brand();

        $brd->brandName = $data['brandName'];

        $brd->save();

        //add category message
        Session::flash('msg', 'Brand added successfully!');

        return redirect()->route('categoryandbrand');


    }


}
