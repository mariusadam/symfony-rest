<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

class BookController extends FOSRestController
{
    public function copyBookAction($id) // RFC-2518
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "copy_book"            [COPY] /books/{id}

    public function propfindBookPropsAction($id, $property) // RFC-2518
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "propfind_book_props"  [PROPFIND] /books/{id}/props/{property}

    public function proppatchBookPropsAction($id, $property) // RFC-2518
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "proppatch_book_props" [PROPPATCH] /books/{id}/props/{property}

    public function moveBookAction($id) // RFC-2518
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "move_book"            [MOVE] /books/{id}

    public function mkcolBooksAction() // RFC-2518
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "mkcol_books"          [MKCOL] /books

    public function optionsBooksAction()
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "options_books"        [OPTIONS] /books

    public function getBooksAction()
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "get_books"            [GET] /books

    public function newBooksAction()
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "new_books"            [GET] /books/new

    public function postBooksAction()
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "post_books"           [POST] /books

    public function patchBooksAction()
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "patch_books"          [PATCH] /books

    public function getBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "get_book"             [GET] /books/{slug}

    public function editBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "edit_book"            [GET] /books/{slug}/edit

    public function putBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "put_book"             [PUT] /books/{slug}

    public function patchBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "patch_book"           [PATCH] /books/{slug}

    public function lockBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "lock_book"            [LOCK] /books/{slug}

    public function unlockBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "unlock_book"          [UNLOCK] /books/{slug}

    public function banBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "ban_book"             [PATCH] /books/{slug}/ban

    public function removeBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "remove_book"          [GET] /books/{slug}/remove

    public function deleteBookAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "delete_book"          [DELETE] /books/{slug}

    public function getBookCommentsAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "get_book_comments"    [GET] /books/{slug}/comments

    public function newBookCommentsAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "new_book_comments"    [GET] /books/{slug}/comments/new

    public function postBookCommentsAction($slug)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "post_book_comments"   [POST] /books/{slug}/comments

    public function getBookCommentAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "get_book_comment"     [GET] /books/{slug}/comments/{id}

    public function editBookCommentAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "edit_book_comment"    [GET] /books/{slug}/comments/{id}/edit

    public function putBookCommentAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "put_book_comment"     [PUT] /books/{slug}/comments/{id}

    public function postBookCommentVoteAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "post_book_comment_vote" [POST] /books/{slug}/comments/{id}/votes

    public function removeBookCommentAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "remove_book_comment"  [GET] /books/{slug}/comments/{id}/remove

    public function deleteBookCommentAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "delete_book_comment"  [DELETE] /books/{slug}/comments/{id}

    public function linkBookFriendAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "link_book_friend"     [LINK] /books/{slug}/friends/{id}

    public function unlinkBookFriendAction($slug, $id)
    {
        $data = [__METHOD__ => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    } // "unlink_book_friend"     [UNLINK] /books/{slug}/friends/{id}
}