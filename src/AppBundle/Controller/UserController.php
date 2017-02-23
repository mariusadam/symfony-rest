<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends FOSRestController
{
    /**
     * @Rest\Get("/users")
     */
    public function getUsersAction()
    {
        $data = [
            'users' => $this->getDoctrine()->getRepository(User::class)->findAll()
        ];

        return $this->view($data, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/users/{userId}")
     */
    public function getUserByIdAction($userId)
    {
        $data = ['user' => $this->getUserById($userId)];
        return $this->view($data, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/users")
     */
    public function postUsersAction($request)
    {
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->view(['user' => $user], Response::HTTP_CREATED);
        }

        return $this->view($form, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @Rest\Put("/users/{userId}")
     */
    public function putUserByIdAction(Request $request, $userId)
    {
        $user = $this->getUserById($userId);
        $form = $this->createForm(UserType::class, $user, ['method' => 'PUT']);

        // tell the form component to only update the fields passed
        // from the form, without clearing the missing fields
        $form->submit($request->request->all(), false);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->view(['user' => $user], Response::HTTP_OK);
        }

        return $this->view($form, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @Rest\Delete("/users/{userId}")
     */
    public function deleteUsersByIdAction($userId)
    {
        $user = $this->getUserById($userId);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $data = ['user' => $user];
        return $this->view($data, Response::HTTP_OK);
    }

    /**
     * Returns the user with the given id
     *
     * @param int $userId
     *
     * @return User
     * @throws NotFoundHttpException if the user is not found
     */
    private function getUserById($userId) {
        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->find($userId);

        if ($user === null) {
            throw $this->createNotFoundException(sprintf('Cloud not find the user with id %s.', $userId));
        }

        return $user;
    }
}
