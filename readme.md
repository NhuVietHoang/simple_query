# Create Query Builder is a simple, methods-chaining dependency-free library to create SQL Queries simple. Supports databases which are supported by PDO -> có thể hiểu là phần Model trong mô hình MVC
by: Nhữ Việt Hoàng
## method chaining sẽ trả về một object (thường là chính object Class chứa method đó) khiến ta có thể gọi method nối tiếp mà không cần phải xuống dòng

## composer require nvh/simple_query_builder
* Sử dụng
    Sử dụng autoload composer
    Cấu hình thông tin database trong $config
```php
$config = [
    'driver'=>'mysql',
    'host'=>'localhost',
    'dbname'=>'kinh.mat',
    'username'=>'root',
    'password'=>'12345',
];
```
```php
Connection::$config = $config;

Có thể sử dụng trực tiếp QueryBuilder

 DB::table('categories')->where(['id','=',20])->get();

    Trong thư mục test thêm các file model có cấu trúc như sau:

<?php
namespace Viethoang\TestNghia\Model;
use Viethoang\SimpleQueryBuilder\Model;

class Categories extends Model{
   // $table chứa tên bảng cần truy xuất dữ liệu 
    protected  $table = 'categories';

}

    Khi đó, để truy xuất dữ liệu từ bảng categories:
        Lấy bản ghi đầu tiên:

       $test = Categories::first();
       $test = Categoties::where(['id','>',20])->first()// lấy bản ghi đầu tiên có id > 20

        Lấy số lượng bản ghi:

    $test = Categories::count();//trả về tổng số bản ghi 
    $test = Categories::where(['id','>',20])->count();

        Chọn các giá trị cần lấy ( mặc định trả về gía trị của tất cả các cột )

    $test = Categories::select(['id','name'])->get();//chỉ tra ve gia tri cua cot email và phone 

        Lựa chọn có điều kiện:

    $test = Categories::where(['id','>',2])->where(['name','=','test4'])->get();

        Chèn bản ghi:

    $data = [
     'name'=>'test3' 
      ];

Categories::create($data)// Chen ban ghi vao bang Categories::insert($data)
```
 - Cập  nhật bản ghi: 

 ```php  
 Categories ::where(['id','=',43])->update($data);

    xóa bản ghi:

//xoa ban ghi 
Categories ::where(['id','=',44])->delete();
 ```