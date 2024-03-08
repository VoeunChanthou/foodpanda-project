<?php
ob_start();
?>
<div class="main-wrapper">
  <!-- ! Main nav -->
  <nav class="main-nav--bg">
    <div class="container main-nav">
      <div class="main-nav-start">
        <div class="search-wrapper">
          <i data-feather="search" aria-hidden="true"></i>
          <input type="text" placeholder="Find User ..." required>
        </div>
      </div>
      <div class="main-nav-end">
        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
          <span class="sr-only">Toggle menu</span>
          <span class="icon menu-toggle--gray" aria-hidden="true"></span>
        </button>
        <div class="lang-switcher-wrapper">
          <button class="lang-switcher transparent-btn" type="button">
            EN
            <i data-feather="chevron-down" aria-hidden="true"></i>
          </button>
          <ul class="lang-menu dropdown">
            <li><a href="##">English</a></li>
            <li><a href="##">French</a></li>
            <li><a href="##">Uzbek</a></li>
          </ul>
        </div>
        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
          <span class="sr-only">Switch theme</span>
          <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
          <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
        </button>
        <div class="notification-wrapper">
          <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
            <span class="sr-only">To messages</span>
            <span class="icon notification active" aria-hidden="true"></span>
          </button>
          <ul class="users-item-dropdown notification-dropdown dropdown">
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">System just updated</span>
                  <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                    here.</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon danger">
                  <i data-feather="info" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">The cache is full!</span>
                  <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                    interfere ...</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">New Subscriber here!</span>
                  <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                </div>
              </a>
            </li>
            <li>
              <a class="link-to-page" href="##">Go to Notifications page</a>
            </li>
          </ul>
        </div>
        <div class="nav-user-wrapper">
          <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
            <span class="sr-only">My profile</span>
            <span class="nav-user-img">
              <picture>
                <source srcset="assets/images/user/<?= $adminPf['user_img'] ?>" type="image/webp"><img src="assets/images/user/<?= $adminPf['user_img'] ?>" alt="User name">
              </picture>
            </span>
          </button>
          <ul class="users-item-dropdown nav-user-dropdown dropdown">
            <li><a href="##">
                <i data-feather="user" aria-hidden="true"></i>
                <span id="popInfo">Profile</span>
              </a></li>
            <li><a href="##">
                <i data-feather="settings" aria-hidden="true"></i>
                <span>Account settings</span>
              </a></li>
            <li><a class="danger" href="controllers/signout/signout.controller.php">
                <i data-feather="log-out" aria-hidden="true"></i>
                <span>Log out</span>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ! Main -->
  <main class="main users chart-page" id="skip-target">
    <div class="container">
      <h2 class="main-title">Dashboard</h2>
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon primary">
              <i data-feather="bar-chart-2" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit success">
                  <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit success">
                  <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit danger">
                  <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon success">
              <i data-feather="feather" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit warning">
                  <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="btn-add">
        <button type="submit" id="add-user-btn" class="btn btn-primary">Add User</button>
      </div>
      <div class="users-table table-wrapper">
        <table class="posts-table">
          <thead>
            <tr class="users-table-info">
              <th class="text-center ml-2">ID</th>
              <th>Author</th>
              <th>Username</th>
              <th>Phone Number</th>
              <th>Email</th>
              <th>Role</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $users = getAllUsers();
            foreach ($users as $user) :
            ?>
              <tr>
                <td><?= $user['user_id'] ?></td>
                <td>
                  <div class="pages-table-img">
                    <picture>
                      <!-- <source srcset="<?= $user['profile_img'] ?>" type="image/webp"> -->
                      <img src="assets/images/user/<?= $user['user_img'] ?>" alt="Profile Picture">
                    </picture>
                  </div>
                </td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['phoneNumber'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                  <?php if (isset($user['role_type'])) {
                    echo $user['role_type'];
                  } else {
                    echo "Role Undefined";
                  } ?>
                </td>
                <td><?= $user['gender'] ?></td>
                <td>
                  <span class="p-relative">
                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                      <div class="sr-only">More info</div>
                      <i data-feather="more-horizontal" aria-hidden="true"></i>
                    </button>
                    <ul class="users-item-dropdown dropdown">
                      <li id="update-user"><a href="#">Edit</a></li>
                      <li id="pop-del"><a href="controllers/admin/delete_user.controller.php?id=<?= $user['user_id'] ?>">Delete</a></li>
                    </ul>
                  </span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </div>
    
    <!-- Pop-up form for adding a new user -->
    <div id="add-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
      <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
        <form class="add-user" action="../../controllers/admin/create_user.controller.php" method="post">
          <h1 class="mb-1 text-center">Add a new user</h1>
          <div class="mb-1">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
          </div>
          <div class="mb-1">
            <label for="email" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-1">
            <label for="password" class="form-label text-secondary">Password</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
          </div>
          <div class="mb-1">
            <label for="number" class="form-label text-secondary">Phone Number</label>
            <input type="int" class="form-control" id="number" name="number" aria-describedby="numberHelp">
          </div>
          <div class="gender-selection d-flex mb-1">
            <label class="text-secondary">Gender:</label>
            <div class="form-check d-flex">
              <input class="text-danger" type="radio" id="maleRadio" name="gender" value="M">
              <label for="maleRadio" class="form-check-label text-secondary">Male</label>
            </div>
            <div class="form-check d-flex">
              <input type="radio" id="femaleRadio" name="gender" value="F">
              <label for="femaleRadio" class="form-check-label text-secondary">Female</label>
            </div>
          </div>
          <div class="input-group mb-2">
            <label class="input-group-text text-secondary" for="inputGroupSelect01">Role</label>
            <select class="form-select text-secondary" name="role" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">Customer</option>
              <option value="2">Restaurant Owner</option>
              <option value="3">Delevery</option>
            </select>
          </div>
          <input type="submit" class="btn btn-primary" name="send" value="Add" />
          <input type="button" class="btn btn-danger" id="add-user-cancel" value="Cancel" />
        </form>
      </div>
    </div>
    <!-- Pop-up form for updating a user -->
    <div id="update-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
      <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
        <form class="update-user" action="../../controllers/admin/admin.edit_user.controller.php" method="post">
          <h1 class="mb-1 text-center">Update user info</h1>
          <div class="mb-1">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" value="<?= $user['username'] ?>">
          </div>
          <div class="mb-1">
            <label for="email" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user['email'] ?>">
          </div>
          <div class="mb-1">
            <label for="password" class="form-label text-secondary">Password</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
          </div>
          <div class="mb-1">
            <label for="number" class="form-label text-secondary">Phone Number</label>
            <input type="int" class="form-control" id="number" name="number" aria-describedby="numberHelp" value="<?= $user['phoneNumber'] ?>">
          </div>
          <div class="input-group mb-1">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
          <div class="gender-selection d-flex mb-1">
            <label class="text-secondary">Gender:</label>
            <div class="form-check d-flex">
              <input class="text-danger" type="radio" id="maleRadio" name="gender" value="M" <?= ($user['gender'] == 'M') ? 'checked' : '' ?>>
              <label for="maleRadio" class="form-check-label text-secondary">Male</label>
            </div>
            <div class="form-check d-flex">
              <input type="radio" id="femaleRadio" name="gender" value="F" <?= ($user['gender'] == 'F') ? 'checked' : '' ?>>
              <label for="femaleRadio" class="form-check-label text-secondary">Female</label>
            </div>
          </div>
          <div class="input-group mb-2">
            <label class="input-group-text text-secondary" for="inputGroupSelect01">Role</label>
            <select class="form-select text-secondary" name="role" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="<?= $user['role_type'] ?>">Customer</option>
              <option value="<?= $user['role_type'] ?>">Restaurant Owner</option>
              <option value="<?= $user['role_type'] ?>">Delevery</option>
            </select>
          </div>
          <input type="submit" class="btn btn-primary" name="send" value="Update" />
          <input type="button" class="btn btn-danger" id="update-user-cancel" value="Cancel" />
        </form>
      </div>
    </div>
    <!-- pop-up profile user-admin -->
    <form id="profile-admin-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%" action="../../controllers/admin/admin.upload_profile.controller.php" method="post" enctype="multipart/form-data">
      <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
        <div class="show-pro d-flex flex-column">
          <label class="d-flex justify-content-center" for="imageInput" style="width: auto;">
            <img id="imagePreview" class="border border-5" src="<?php $adminPf['user_img']; ?>" style="border-radius: 50%;" width="100" height="100" alt="Preview">
          </label>
          <input type="file" id="imageInput" class="image" name="my_image" style="display: none;" accept="image/*">
          <div class="username text-center fs-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><?= $adminPf['username']; ?></div>
          <div class="email text-secondary mb-3 m-auto" style="font-family: serif; font-style: italic;"><?= $adminPf['email']; ?></div>
        </div>
        <div class="show-info" style="width:100%;">
          <input type="text" class="form-control mb-3" placeholder="Username" aria-label="username" value="<?= $adminPf['username'] ?>">
          <input type="email" class="form-control mb-3" placeholder="Email Address" aria-label="email" value="<?= $adminPf['email'] ?>">
          <input type="number" class="form-control mb-3" placeholder="Phone Number" aria-label="phone" value="<?= $adminPf['phoneNumber'] ?>">
        </div>
        <div>
          <input type="submit" class="btn btn-primary" name="send" value="Save" />
          <input type="button" class="btn btn-danger" id="btn-user-cancel" value="Cancel" />
        </div>
      </div>
    </form>
  </main>


    <?php
    echo "<script>

    document.addEventListener('DOMContentLoaded', function() {
      const imageInput = document.getElementById('imageInput');
      const imagePreview = document.getElementById('imagePreview');

      imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            localStorage.setItem('imagePreview', e.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
      const storedImagePreview = localStorage.getItem('imagePreview');
      if (storedImagePreview) {
        imagePreview.src = storedImagePreview;
      }
    });


    // ================Create User Form================
    document.addEventListener('DOMContentLoaded', function () {
    let addUserBtn = document.getElementById('add-user-btn');
    let addUserCancelBtn = document.getElementById('add-user-cancel');
    let updateUserCancelBtn = document.getElementById('update-user-cancel');
    let addUserPopup = document.getElementById('add-user-popup');
    let updateUserPopup = document.getElementById('update-user-popup');

// =================Show popup admin_user===============
    let btnUpInfo = document.getElementById('popInfo');
    let popUpInfo = document.getElementById('profile-admin-popup');
    let btnHidePopup = document.getElementById('btn-user-cancel');
    function showProfilePopup() {
      popUpInfo.style.display = 'block';
    }

    function hideProfilePopup() {
      popUpInfo.style.display = 'none';
    }
    btnHidePopup.addEventListener('click',hideProfilePopup);
    btnUpInfo.addEventListener('click', showProfilePopup);

    function showAddUserPopup() {
      addUserPopup.style.display = 'block';
    }
    function hideAddUserPopup() {
      addUserPopup.style.display = 'none';
    }
    function hideUpdateUserPopup() {
      updateUserPopup.style.display = 'none';
    }
    addUserBtn.addEventListener('click', showAddUserPopup);
    addUserCancelBtn.addEventListener('click', hideAddUserPopup);
    updateUserCancelBtn.addEventListener('click', hideUpdateUserPopup);
    let updateUserBtn = document.querySelectorAll('#update-user');

    // ===============Update User ====================
    function showUpdateUserPopup() {
      updateUserPopup.style.display = 'block';
    }
    for(let i = 0; i < updateUserBtn.length; i++) {
      updateUserBtn[i].addEventListener('click', showUpdateUserPopup);
    }
    let updateUserPopupVisible = false;
    updateUserBtn.addEventListener('click', function() {
      if (updateUserPopupVisible) {
        updateUserPopup.style.display = 'none';
      } else {
        updateUserPopup.style.display = 'block';
      }
      updateUserPopupVisible = !updateUserPopupVisible;
    });
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      let dropdown = document.querySelector('.users-item-dropdown.dropdown');
      let isClickInsideDropdown = dropdown.contains(event.target);
      if (!isClickInsideDropdown) {
        dropdown.style.display = 'none';
      }
    });
  });
</script>";
    ?>

  