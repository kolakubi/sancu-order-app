<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    //
    public function get_notif(){
        $id_user = auth()->user()->id;

        $notif =  Notification::where('id_user', $id_user)
            ->orderBy('id', 'DESC')
            ->get();
        // dd($notif);

        return view('notification', [
            'title' => 'Notifikasi',
            'notification' => $notif
        ]);
    }

    public function read($id){
        // update read jadi true
        Notification::where('id', $id)
            ->where('id_user', auth()->user()->id)
            ->update([
                'dilihat' => 1
            ]);

        // get id_order
        $id_order = Notification::where('id', $id)
            ->first();

        $id_order = $id_order->id_order;

        return redirect('/profil/transaksi_detail/'.$id_order);
    }

    public function get_total_unread(){
        $jumlah_notif = Notification::where('id_user', auth()->user()->id)
                        ->where('dilihat', 0)
                        ->get()->count();

        return $jumlah_notif;
    }
}
