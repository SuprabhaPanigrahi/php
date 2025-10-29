<?php
declare(strict_types=1);
namespace Models\Repository;
use Models\User;
class UserRepository
{
  private array $users = [];

  public function addUser(User $user): void
  {
    $this->users[] = $user;
  } 
  public function getUsers(): array
  {
    return $this->users;
  }
  public function findUserById($id): ?User
  {
    foreach ($this->users as $user) {
      if ($user->getId() === $id) {
        return $user;
      }
    }
    return null;
  }

  public function removeUserById($id)
  {
    foreach ($this->users as $index => $user) {
      if ($user->getId() === $id) {
        unset($this->users[$index]);
        $this->users = array_values($this->users); // Reindex array
        return true;
      }
    }
    return false;
  }

  public function updateUser($id, User $newUser)
  {
    foreach ($this->users as $index => $user) {
      if ($user->getId() === $id) {
        $this->users[$index] = $newUser;
        return true;
      }
    }
    return false;
  }
}
