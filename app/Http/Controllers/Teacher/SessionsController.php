<?php

namespace App\Http\Controllers\Teacher;

use App\Models\LectureSession;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SessionsController
{
    public function update(LectureSession $session, Request $request)
    {
        $data = [
            'is_held' => $request->post('is_held') == 'on'
        ];
        if($request->files) {
            $data['files'] = [...($session->files??[]), ...$this->uploadFiles($request)];

        }
        $session->update($data);
        return redirect()->back()->with('success', 'جلسه درس با موفقیت ویرایش شد.');
    }
    private function uploadFiles(Request $request)
    {
        $files = $request->files->get('files');
        $result = [];
        foreach($files as $index => $file) {
            $orgMimetype = $file->getClientMimeType();
            $orgExtension = $file->getClientOriginalExtension();
            $orgName = $file->getClientOriginalName();
            $newName = Str::random(6) . '-' . time() . '-' . rand(1000, 9000) . '.' . $orgExtension;
            $path = $request->file('files')[$index]->storeAs('public', $newName);

            $data = [
                'orgName' => $orgName,
                'newName' => $newName,
                'mimeType' => $orgMimetype,
                'path' => $path
            ];
            $result[] = $data;
        }
        return $result;
    }
}
