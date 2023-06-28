<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* UploadImage モデルを読み込み */
use App\Models\UploadImage;

class UploadImageController extends Controller
{
    /* POST 送信された画像ファイルを受け取って、storageに保存する
     * 画像を保存した際に、データベースにもレコードを追加する
     */
    public function upload(Request $request)
    {
        /* バリデーション */
        $request->validate([
            'image' => 'required|max:1024|mimes:jpg,jpeg,png,gif'
        ]);

        /* store('保存先ディレクトリ', 'ディスク') メソッドで、ファイルをstorage/public/images ディレクトリに保存する
         * ファイル名はランダム文字列になり、store()の返り値として取得できる
         * 第2引数は、config/filesystems.php で設定したdisks 配列のキーから指定する
         */
        $file_path = $request->image->store('images', 'public');

        /* UploadImage オブジェクトを生成 */
        $upload_image = new UploadImage();
        $upload_image->filename = $request->image->getClientOriginalName();
        $upload_image->memo = $request->memo;
        $upload_image->filepath = $file_path;

        /* データベースにレコードを追加する */
        $upload_image->save();

        /* 保存した画像を表示する */
        print("<img src='" . asset("$file_path") . "' width='300'>");

        print("<a href='upload_form'>画像投稿フォームに戻る</a>");
    }

    /* 画像の一覧画面を表示する */
    public function index()
    {
        $upload_images = UploadImage::all();
        return view('upload_images', compact('upload_images'));
    }
}
