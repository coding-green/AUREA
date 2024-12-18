<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <style>
    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      width: 100vw;
    }

    .user-account {
      width: 100%;
      margin: auto 100px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .user-account__content {
      width: 100%;
      gap: 60%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .user-account__info {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 30px;
      width: 100%;
      padding: 30px 0px;
    }

    .customer__title {
      font-size: 30px;
      font-weight: 600;
    }

    .user-account__info a {
      text-decoration: none;
      color: black;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
    }

    .svg-wrapper {
      height: 26px;
      width: 26px;
    }

    @media (max-width: 768px) {
      .user-account__info {
        gap: 20px;
      }

      .user-account__info a {
        gap: 5px;
      }

      .user-account__content {
        flex-direction: column;
        align-items: flex-start;
        gap: 40%;
      }
    }

    @media (max-width: 480px) {
      .user-account__info {
        flex-direction: column;
        align-items: flex-start;
      }

      .user-account__info a {
        margin: 10px 0px;
      }
    }
  </style>
</head>

<body>
  <main class="main-content">
    <div class="user-account">
      <div class="user-account__info">
        <h1 class="customer__title">Account</h1>
        <a onclick="logout()">
          <span class="svg-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account"
              viewBox="0 0 18 19">
              <path fill="currentColor" fill-rule="evenodd"
                d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35"
                clip-rule="evenodd"></path>
            </svg>
          </span>
          <span>Log out</span>
        </a>
      </div>

      <div class="user-account__content">
        <div>
          <h2>Order history</h2>

          <p>You haven't placed any orders yet.</p>
        </div>

        <div>
          <h2>Account details</h2>

          <p>
            Nerea Zimmerman<br />Norton and Kennedy Trading<br />38 Green Old
            Avenue<br />Ex tempore omnis ex<br />Deleniti et voluptas<br />Waterford<br />92911<br />Ireland
          </p>

          <a href="../account/address.php"> View addresses (2) </a>
        </div>
      </div>
    </div>
  </main>
  <script>
    // write code for logout

    function logout() {
      localStorage.removeItem('user');
      window.location.href = "../login.php";
    }
  </script>
</body>

</html>