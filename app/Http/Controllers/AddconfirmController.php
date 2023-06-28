 <?php

    namespace App\Http\Controllers;

    use App\Models\Item;
    use Illuminate\Http\Request;




// class AddconfirmController extends Controller
// {

//     public function addconfirm(Request $request)
//     {

//         $this->validate($request, [
//             'name' => ['required', 'min:2'],

//             'detail'  => ['required'],

//             'price'  => ['required'],

//             'stock'  => ['required'],

//             'category'  => ['required']
//         ]);

//         if ($request->has('back')) {
//             return redirect('/add')->withInput();
//         }


//         if ($request->has('send')) {
//             $new_item = new Item();

//             $new_item->name = $request->name;
//             $new_item->detail = $request->detail;
//             $new_item->price = $request->price;
//             $new_item->stock = $request->stock;
//             $new_item->category_id = $request->category;
//             $new_item->save();

//             return redirect('/beer/list');
//         }
//         return view('beer.confirm', compact('request'));
//     }
// }
