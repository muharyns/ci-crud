<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Controller;

class CustomerController extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        $data['title'] = 'Customer List'; // Set the title here
        return view('customer_list', $data);
    }

    public function add()
    {
        $data['title'] = 'Add Customer'; // Set the title here
        return view('customer_add', $data);
    }

    public function create()
    {
        $model = new CustomerModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'phone'   => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'status'  => $this->request->getPost('status'),
        ];

        $model->save($data);

        return redirect()->to('/customer');
    }
    public function edit($id)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        $data['title'] = 'Edit Customer'; // Set the title here
        return view('customer_edit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'phone'   => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'status'  => $this->request->getPost('status'),
        ];

        $model->update($id, $data);

        return redirect()->to('/customer');
    }

    public function delete($id)
    {
        $model = new CustomerModel();
        $model->delete($id);

        return redirect()->to('/customer');
    }
}
