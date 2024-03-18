<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientPartnerHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientPartnerController extends Controller
{
    public function client_partner_header()
    {
        $client_headers = ClientPartnerHeader::all();
        return view('admin.client_partner.client_partner_header', compact('client_headers'));
    }
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $client_header = $request->all();
            if (Auth::guard('admin')->check()) {
                $rules = [
                    'title' => 'required|string',
                    'subtitle' => 'nullable|string',

                ];
                $messages = [
                    'title.required' => 'The title field is required.',
                    'title.string' => 'The title must be a string.',
                    'subtitle.string' => 'The subtitle must be a string.',
                ];
                $validate = Validator::make($client_header, $rules, $messages);
                if ($validate->fails()) {
                    return redirect()->back()->withErrors($validate)->withInput();;
                }
                $hero_section = new ClientPartnerHeader();
                $hero_section->title = $client_header['title'];
                $hero_section->subtitle = $client_header['subtitle'];
                if ($hero_section->save()) {
                    return redirect()->back()->with('success', "Client Header Data Has Been Successfully Saved");
                }
            }
        }
    }
    public function edit($id)
    {
        $client_header = ClientPartnerHeader::where('id', $id)->first();
        // dd($client_header);
        return view('admin.client_partner.edit_client_partner_header', compact('client_header'));
    }
    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $client_header = $request->all();
            if (Auth::guard('admin')->check()) {
                $rules = [
                    'title' => 'string',
                    'subtitle' => 'nullable|string',

                ];
                $messages = [
                    'title.string' => 'The title must be a string.',
                    'subtitle.string' => 'The subtitle must be a string.',
                ];
                $validate = Validator::make($client_header, $rules, $messages);
                if ($validate->fails()) {
                    return redirect()->back()->withErrors($validate)->withInput();;
                }
                $update = ClientPartnerHeader::find($id)->update([
                    'title' => $client_header['title'],
                    'subtitle' => $client_header['subtitle']
                ]);
                if ($update) {
                    return redirect()->back()->with('success', "Client Header Data Has Been Successfully Updated");
                }
            }
        }
    }
    public function delete($id)
    {
            $client_header = ClientPartnerHeader::find($id);
            if (Auth::guard('admin')->check()) {
                if ($client_header) {
                    $client_header->delete();
                    return redirect()->back()->with('success', 'Client Header Data Has Been Successfully Deleted');
                }
            }
        }
    }

