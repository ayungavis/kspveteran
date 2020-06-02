<?php

namespace App\Http\Controllers;

use App\Application;
use App\ApplicationStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->whatsapp = new WhatsAppController();
    }

    public function approve(Request $request, $id)
    {
        $message = "Selamat, aplikasi pengajuan pinjaman Anda disetujui oleh Kepala Cabang KSP Veteran. Silahkan datang ke kantor kami pada ". date('l, d M Y', strtotime($request->input('approved_invitation_date'))) .", terima kasih.";

        DB::beginTransaction();

        try {
            $application = Application::findOrFail($id);
            $application->approved_by = auth()->user()->id;
            $application->approved_at = date("Y-m-d H:i:s");
            $application->approved_invitation_date = $request->input('approved_invitation_date');
            $application->application_status_id = ApplicationStatus::APPROVE;
            $application->save();

            DB::commit();

            $this->whatsapp->send($request->input('whatsapp'), $message);

            return back()->with('message', 'Aplikasi pengajuan telah disetujui!');
        } catch (\Exception $e) {
            DB::rollback();
            return view('errors.504');
        }
    }

    public function disapprove(Request $request, $id)
    {
        $message = "Mohon maaf, aplikasi pengajuan pinjaman Anda belum bisa kami terima dikarenakan ". $request->input('rejected_reason') .", terima kasih.";

        DB::beginTransaction();

        try {
            $application = Application::findOrFail($id);
            $application->rejected_by = auth()->user()->id;
            $application->rejected_at = date("Y-m-d H:i:s");
            $application->rejected_reason = $request->input('rejected_reason');
            $application->application_status_id = ApplicationStatus::DISAPPROVE;
            $application->save();

            DB::commit();

            $this->whatsapp->send($request->input('whatsapp'), $message);

            return back()->with('message', 'Aplikasi pengajuan telah ditolak!');
        } catch (\Exception $e) {
            DB::rollback();
            return view('errors.504');
        }
    }
}
