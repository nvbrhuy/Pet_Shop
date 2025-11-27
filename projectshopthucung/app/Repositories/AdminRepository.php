<?php
namespace App\Repositories;

use App\Repositories\IAdminRepository;
use App\Http\Requests;

use App\Models\Khachhang;
use App\Models\Sanpham;
use App\Models\Dathang;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminRepository implements IAdminRepository{

    public function signIn($data){
    $user = Khachhang::where('email', $data->email)->first();

    if ($user && $user->password === $data->password) {
        
        if ($user->id_phanquyen == 1) {
            Auth::login($user);
            return redirect('/dashboard');
        } else {
            return back()->with('thongbao', 'Bạn không có quyền truy cập khu vực Admin!');
        }
    }
    return back()->with('thongbao', 'Sai email hoặc mật khẩu');

    }
    public function logOut(){
        Auth::logout();
        return redirect('/admin');
    }

    public function searchProduct($data)
    {
        $searchKeyword = $data->input('tukhoa');
        return Sanpham::where('tensp', 'like', '%' . $searchKeyword . '%')->paginate(5);
    }

    public function getOrderView()
    {
        return Dathang::orderby('id_dathang', 'desc')->take(6)->get();
    }
    public function totalsCustomer()
    {
        return Khachhang::count();
    }

    public function totalsOrders()
    {
        return Dathang::count();
    }
    public function totalsMoney()
    {
        return DB::table('chitiet_donhang')
            ->join('dathang', 'chitiet_donhang.id_dathang', '=', 'dathang.id_dathang')
            ->where('dathang.trangthai', 'giao thành công')
            ->sum(DB::raw('chitiet_donhang.giakhuyenmai * chitiet_donhang.soluong'));
    }
    
    public function totalsSaleProducts()
    {
        return DB::table('chitiet_donhang')
        ->join('dathang', 'chitiet_donhang.id_dathang', '=', 'dathang.id_dathang')
        ->where('dathang.trangthai', 'giao thành công')
        ->sum('chitiet_donhang.soluong');
    }


}
