<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="style.css">
  <title>navigation</title>
  <style>
    .content nav{
      background-color: #eceef9!important;
    }
  </style>
</head>
<body class="d-flex flex-column flex-lg-row">
  <section class="content fixed-top">
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary w-100  d-flex align-items-center justify-content-center flex-row flex-lg-column">
      <div class="container d-flex align-items-start justify-content-between align-items-lg-center justify-content-lg-center flex-row flex-lg-column ">
        <a class="navbar-brand mt-3" href="./home.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC2ElEQVR4nO2ZS2gTURSGb4uKFEQRfC20vnDhTrLQ2uScRrpyH5JzWi2oRLpQcOXCRRYuFKvgNqRzTlLdWATX2go+6kKs4EqhgiC+qKDW+kAKWrnppLZBnVgac9POB3eVMzP/P/+5MzdzjQkJWVjEkrIxxnoYSPqA5QmQfECSZ0B6ypjJBuMqkXS2CUj2I+tFZHmMrJN/HOR1G3eYbIBUYRewnETWm8D6bbZY+Qgs1zClx6BDYtGEtwZJjvi/36up9KIY1gSyZIHk5Wzh+h1YhpH1LLLXvjPRv6z8+FjHpQ22Fkhf/Ffh2KXLrShgOQekj5DlR9ldfw6sOWtuTyK3Ouh8kXR2qW96ourio+xtBc6nkbUfScfL7voXYB2w7RTnfGQukxb9c1VFPHbmtgNpj428vF2Q9CGwnAHOx3/XLk4YiSYLO5DlyqyWIXmNpHlg4ZbOvrXzekFTBSMxkqPI8nXGRL0KVGgx9QSS1/2rheSybS1Tb2BSN89I4g6w3kXWd399gVVxAOsnIBmyHWKfahUbAdLTtRKNgUPuY0LXV2hEhmYc/MpO6vZEdqWpEdilq2wawDo2lZAMV/R0BJY3fqRjsc6+LcYR4sn8NmR572s7HniA7cmpNLwTxjGA8gd9Iw+Ci/3FXeuBwibjGHsP9a4orSACi6fnB2aWGAfBSl+YVV3rzAMYGnEMDBNxDAwTcQysl0Ti3NsMJINA8tn+bS5/MdeNESAZLFv13qhPI1xa601/FxivVyMDCyKROPc2W/HFZEiu1+0cCSI04hoYtpZjYJiIY+DiS4R0whbaPT/jGJF0tqnijSAgfWqL21hbjWNAh8T8REYCi5H1gv8R7JbJZBqNK2QyjfajelEbaU9g/b5Ubh2yvp2KUG4jedFatlnEthN50ZIJJBmteIOpLeXtnjbj0iAZtdr+6U4UkyE5b/ux9ACojXi11x6x7WS3v+cYbEjIoucn1BmPQCtmYy4AAAAASUVORK5CYII="></a>
        <button class="navbar-toggler mt-4 mt-lg-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav  mb-2 mb-lg-0  w-100  d-flex align-items-center justify-content-center flex-column" >
          <li class="nav-item mt-0 mt-lg-5">
              <a class="nav-link <?php if($activeNav=='home'){echo 'activeNav';} ?>" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($activeNav=='expenses'){echo 'activeNav';} ?>"  href="./food.php">Expenses</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link <?php if($activeNav=='debt'){echo 'activeNav';} ?>" href="./borrow.php">Debt</a>
            </li>
            <li class="nav-item pro-page <?php if($activeNav=='profile'){echo 'activeNav';} ?>">
              <a class="nav-link pro-icon " href="./profile.php"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
</body>

</html>