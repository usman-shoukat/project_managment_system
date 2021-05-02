import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AdminComponent } from './admin.component';

const routes: Routes = [
  {
    path: '',
    component: AdminComponent,
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      {
        path: 'dashboard',
        loadChildren: () =>
          import('./dashboard/dashboard.module').then((m) => m.DashboardModule),
      },
      {
        path: 'categories',
        loadChildren: () =>
          import('./categories/categories.module').then((m) => m.CategoriesModule),
      },
      {
        path: 'add-category',
        loadChildren: () =>
          import('./add-category/add-category.module').then(
            (m) => m.AddCategoryModule
          ),
      },
      {
        path: 'edit-category',
        loadChildren: () =>
          import('./edit-category/edit-category.module').then((m) => m.EditCategoryModule),
      },
      {
        path: 'sub-categories',
        loadChildren: () =>
          import('./sub-categories/sub-categories.module').then((m) => m.SubCategoriesModule),
      },
      {
        path: 'add-sub-category',
        loadChildren: () =>
          import('./add-sub-category/add-sub-category.module').then(
            (m) => m.AdminInvoiceModule
          ),
      },
      {
        path: 'edit-sub-category',
        loadChildren: () =>
          import('./edit-sub-category/edit-sub-category.module').then((m) => m.EditSubCategoryModule),
      },
      {
        path: 'services',
        loadChildren: () =>
          import('./services/services.module').then(
            (m) => m.SpecialitiesModule
          ),
      },
      {
        path: 'booking-list',
        loadChildren: () =>
          import('./booking-list/booking-list.module').then(
            (m) => m.BookingListModule
          ),
      },
      {
        path: 'payments',
        loadChildren: () =>
          import('./payments/payments.module').then(
            (m) => m.PaymentsModule
          ),
      },
      {
        path: 'rating-type',
        loadChildren: () =>
          import('./rating-type/rating-type.module').then(
            (m) => m.RatingTypeModule
          ),
      },      
      {
        path: 'add-rating-type',
        loadChildren: () =>
          import('./add-rating-type/add-rating-type.module').then(
            (m) => m.AddRatingTypeModule
          ),
      },
      {
        path: 'edit-rating-type',
        loadChildren: () =>
          import('./edit-rating-type/edit-rating-type.module').then(
            (m) => m.EditRatingTypeModule
          ),
      },
      {
        path: 'ratings',
        loadChildren: () =>
          import('./ratings/ratings.module').then(
            (m) => m.RatingsModule
          ),
      },
      {
        path: 'subscriptions',
        loadChildren: () =>
          import('./subscriptions/subscriptions.module').then((m) => m.SubscriptionsModule),
      },
      {
        path: 'add-subscription',
        loadChildren: () =>
          import('./add-subscription/add-subscription.module').then(
            (m) => m.AddSubscriptionModule
          ),
      },
      {
        path: 'edit-subscription',
        loadChildren: () =>
          import('./edit-subscription/edit-subscription.module').then(
            (m) => m.EditSubscriptionModule
          ),
      },
      {
        path: 'wallet',
        loadChildren: () =>
          import('./wallet/wallet.module').then(
            (m) => m.WalletModule
          ),
      },
      {
        path: 'service-providers',
        loadChildren: () =>
          import('./service-providers/service-providers.module').then(
            (m) => m.ServiceProvidersModule
          ),
      },
      {
        path: 'users',
        loadChildren: () =>
          import('./users/users.module').then(
            (m) => m.UsersModule
          ),
      },
      {
        path: 'settings',
        loadChildren: () =>
          import('./settings/settings.module').then((m) => m.SettingsModule),
      },
      {
        path: 'login',
        loadChildren: () =>
          import('./login/login.module').then(
            (m) => m.LoginModule
          ),
      },
      {
        path: 'profile',
        loadChildren: () =>
          import('./profile/profile.module').then(
            (m) => m.ProfileModule
          ),
      },
      {
        path: 'all-notifications',
        loadChildren: () =>
          import('./notifications/notifications.module').then(
            (m) => m.NotificationsModule
          ),
      },
      
           
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdminRoutingModule {}
