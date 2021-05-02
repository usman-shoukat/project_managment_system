import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BookServiceComponent } from './book-service.component';

const routes: Routes = [
  {
    path: '',
    component: BookServiceComponent,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class BookServiceRoutingModule { }
