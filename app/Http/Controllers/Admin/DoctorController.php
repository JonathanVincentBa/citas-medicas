<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\User;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function index()
    {
        $doctors = User::doctors()->paginate(5);
    	return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    private function performValidation(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'dni' => 'nullable|digits:10',
            'address' => 'nullable|min:5',
            'phone' => 'nullable|digits_between:9,10'
        ];
        $this->validate($request, $rules);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->performValidation($request);

    	User::create(
            $request->only('name','email','dni','address','phone')
            +[
                'role' => 'doctor',
                'password' => bcrypt($request->input('password'))
            ]   
        );
        $notification = 'El medico se ha registrado correctamente.';
    	return redirect('/doctors')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = User::doctors()->findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->performValidation($request);

        $user = User::doctors()->findOrFail($id);

        $data = $request->only('name','email','dni','address','phone');
        $password = $request->input('password');
        if ($password) {
            $data ['password'] =  bcrypt($password);
        }
            

        $user->fill($data);
        $user->save();//UPDATE
        
        $notification = 'La informacion del medico se ha actualizado correctamente.';
    	return redirect('/doctors')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $doctor)
    {
        $doctorName = $doctor->name;

        $doctor->delete();

        $notification = "El medico $doctorName se ha eliminado correctamente.";
    	return redirect('/doctors')->with(compact('notification'));

    }
}
