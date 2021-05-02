import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EditServiceComponent } from './edit-service.component';

const routes: Routes = [
  {
    path: '',
    component: EditServiceComponent,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EditServiceRoutingModule {}
