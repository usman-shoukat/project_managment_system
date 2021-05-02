import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PagesComponent } from './pages.component';

const routes: Routes = [
  {
    path: '',
    component: PagesComponent,
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      {
        path: 'search',
        loadChildren: () =>
          import('./search/search.module').then(
            (m) => m.SearchModule
          ),
      },
      {
        path: 'service-details',
        loadChildren: () =>
          import('./service-details/service-details.module').then(
            (m) => m.ServiceDetailsModule
          ),
      }, 
      {
        path: 'book-service',
        loadChildren: () =>
          import('./book-service/book-service.module').then(
            (m) => m.BookServiceModule
          ),
      },     
      {
        path: 'add-service',
        loadChildren: () =>
          import('./add-service/add-service.module').then((m) => m.AddServiceModule),
      },
      {
        path: 'edit-service',
        loadChildren: () =>
          import('./edit-service/edit-service.module').then((m) => m.EditServiceModule),
      },
      {
        path: 'chat',
        loadChildren: () =>
          import('./messages/messages.module').then((m) => m.MessagesModule),
      },      
      {
        path: 'notifications',
        loadChildren: () =>
          import('./notifications/notifications.module').then((m) => m.NotificationsModule),
      },
      {
        path: 'about-us',
        loadChildren: () =>
          import('./about-us/about-us.module').then((m) => m.AboutUsModule),
      },
      {
        path: 'privacy-policy',
        loadChildren: () =>
          import('./privacy-policy/privacy-policy.module').then(
            (m) => m.PrivacyPolicyModule
          ),
      },
      {
        path: 'terms-conditions',
        loadChildren: () =>
          import('./terms-conditions/terms-conditions.module').then(
            (m) => m.TermsConditionsModule
          ),
      },
      {
        path: 'faq',
        loadChildren: () =>
          import('./faq/faq.module').then((m) => m.FaqModule),
      },
      {
        path: 'contact-us',
        loadChildren: () =>
          import('./contact-us/contact-us.module').then((m) => m.ContactUsModule),
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PagesRoutingModule { }
