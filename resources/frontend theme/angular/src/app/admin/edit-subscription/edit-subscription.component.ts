import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-edit-subscription',
  templateUrl: './edit-subscription.component.html',
  styleUrls: ['./edit-subscription.component.css']
})
export class EditSubscriptionComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit(): void {
  }

  submit() {
    this.router.navigate(['/admin/subscriptions']);
  }

}
