import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProvidersComponent } from './providers.component';

const routes: Routes = [
  {
    path: '',
    component: ProvidersComponent,
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      {
        path: 'dashboard',
        loadChildren: () =>
          import('./dashboard/dashboard.module').then((m) => m.DashboardModule),
      },
      {
        path: 'services',
        loadChildren: () =>
          import('./services/services.module').then((m) => m.ServicesModule),
      },
      {
        path: 'booking-list',
        loadChildren: () =>
          import('./booking-list/booking-list.module').then(
            (m) => m.BookingListModule
          ),
      },
      {
        path: 'profile-settings',
        loadChildren: () =>
          import('./settings/settings.module').then((m) => m.SettingsModule),
      },
      {
        path: 'wallet',
        loadChildren: () =>
          import('./wallet/wallet.module').then(
            (m) => m.WalletModule
          ),
      },
      {
        path: 'subscription',
        loadChildren: () =>
          import('./subscription/subscription.module').then((m) => m.SubscriptionModule),
      },      
      {
        path: 'availability',
        loadChildren: () =>
          import('./availability/availability.module').then((m) => m.AvailabilityModule),
      },
      {
        path: 'reviews',
        loadChildren: () =>
          import('./reviews/reviews.module').then((m) => m.ReviewsModule),
      },     
      {
        path: 'payment',
        loadChildren: () =>
          import('./payment/payment.module').then((m) => m.PaymentModule),
      },
    ],
  },
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ProvidersRoutingModule {}
