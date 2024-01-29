<?php

namespace App\Controllers;
use App\Models\BookModel;

class Books extends BaseController
{
    public function view()  //viewing function
    {
        $b = new BookModel();
        $data['bk'] = $b->findAll();
        return view('books/bookspage', $data);
    }
/**------------------------------------------------------------------------------------ */

    public function edit($book_id = null)   //editing or updating function
    {
        $b = new BookModel();
        $data['bk'] = $b->where('book_id', $book_id)->first();
        return view('books/bookedit', $data);
    }
    public function update()
    {
        $b = new BookModel();
        $book_id = $this->request->getVar('book_id');
        $data = [
            'title' => $this->request->getVar('title'),
            'isbn_no' => $this->request->getVar('isbn_no'),
            'copies' => $this->request->getVar('copies'),
            'author' => $this->request->getVar('author')
        ];
        $b->set($data)->where('book_id', $book_id)->update();
        return redirect()->to('/');
    }
/**------------------------------------------------------------------------------------ */
    public function add()   //adding function
    {
        return view('books/bookedit');
    }
    public function save()
    {
        $b = new BookModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'isbn_no' => $this->request->getPost('isbn_no'),
            'copies' => $this->request->getPost('copies'),
            'author' => $this->request->getPost('author')
        ];
        $b->save($data);
        return redirect()->to('/');
    }
/**------------------------------------------------------------------------------------ */

    public function delete($book_id = null) //deleting functions
    {
        $b = new BookModel();
        $data['bk'] = $b->where('book_id', $book_id)->delete($book_id);
        return redirect()->to('/');
    }

    public function sendMail()
    {
        $to = 'zerouno123789@gmail.com';
        $subject = 'testing';
        $message = 'test message';
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('zerouno789123@gmail.com', $subject);
        $email->setMessage($message);
        if($email->send()){
            echo 'email sent successfuly';
        }else{
            $data = $email->printDebugger(['headers']);
            print($data);
        }
    }

    public function mail()
    {
        $this->sendMail();
    }
}